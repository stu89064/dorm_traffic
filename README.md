# dorm_traffic

成大宿網流量查詢系統
這個程式分成兩個部分，第一個部分是crawler，用crontab排程每小時至(http://www.cc.ncku.edu.tw/dorm/disable/flow_today.php)
抓取資料並寫入資料庫，第二部分是網頁的Frontend與Backend。
