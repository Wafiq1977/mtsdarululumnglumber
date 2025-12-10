<?php

if (!function_exists('log_admin_activity')) {
    /**
     * Log admin activity
     */
    function log_admin_activity(string $action, string $description, array $data = [])
    {
        $user = session()->get('user');
        if (!$user) return;

        $logData = [
            'timestamp' => date('Y-m-d H:i:s'),
            'user_id' => $user['id'],
            'username' => $user['username'],
            'action' => $action,
            'description' => $description,
            'ip_address' => service('request')->getIPAddress(),
            'user_agent' => service('request')->getUserAgent()->getAgentString(),
            'data' => json_encode($data)
        ];

        // Log to file
        $logFile = WRITEPATH . 'logs/admin_activity_' . date('Y-m-d') . '.log';
        $logMessage = json_encode($logData) . PHP_EOL;

        if (!is_dir(dirname($logFile))) {
            mkdir(dirname($logFile), 0755, true);
        }

        file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);

        // Also log to CI logger
        log_message('info', 'Admin Activity: ' . $action . ' - ' . $description, $data);
    }
}

if (!function_exists('get_admin_logs')) {
    /**
     * Get admin activity logs
     */
    function get_admin_logs(int $limit = 50): array
    {
        $logFile = WRITEPATH . 'logs/admin_activity_' . date('Y-m-d') . '.log';

        if (!file_exists($logFile)) {
            return [];
        }

        $logs = [];
        $lines = array_slice(file($logFile), -$limit);

        foreach ($lines as $line) {
            $logData = json_decode(trim($line), true);
            if ($logData) {
                $logs[] = $logData;
            }
        }

        return array_reverse($logs);
    }
}

if (!function_exists('clean_old_logs')) {
    /**
     * Clean old log files (older than 30 days)
     */
    function clean_old_logs(): void
    {
        $logDir = WRITEPATH . 'logs/';
        if (!is_dir($logDir)) return;

        $files = glob($logDir . 'admin_activity_*.log');
        $cutoff = strtotime('-30 days');

        foreach ($files as $file) {
            if (filemtime($file) < $cutoff) {
                unlink($file);
            }
        }
    }
}