<?php

/**
 * Volume mount 檔案清單
 *
 * 鍵（key）為目標路徑  
 * 值（value）為源路徑，`(d)` 代表為資料夾，  
 * 其他非空字串者在本專案（Docker 建構專案）內有原始參照檔，初始化（執行 `init` 腳本）時會複製這些檔案到目標路徑
 *
 * @var string[]
 */
return [

    # 日誌
    PROJECT_BASE . '/Logs/App'                   => '(d)',
    PROJECT_BASE . '/Logs/App/syslog'            => '',
    PROJECT_BASE . '/Logs/App/apache.access.log' => '',
    PROJECT_BASE . '/Logs/App/apache.error.log'  => ''

];
