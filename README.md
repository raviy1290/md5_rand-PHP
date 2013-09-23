md5_rand-PHP
============
Using hashing to generate random string from limited possible character-set 
md5 based random string (alphanumeric+ special chars) generation in PHP avoid rand(), mt_rand() 

creating randomly generated string from character-set
"[a-Z0-9]~@#$%^*()_+-={}|]["


without using rand() or mt_rand() for random seed point 
rather creating seed point based on md5(time.date.uniqid)


