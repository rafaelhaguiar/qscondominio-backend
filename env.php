<?php


// IN DEPLOY CHANGE TO FALSE
putenv('DISPLAY_ERRORS_DETAILS=' . true);

//DB - PUT YOUR CONFIG ON DEPLOY, THIS CONFIG IS TO BASIC TESTS IN XAMPP
putenv('DB_QS_CONDOMINIO_HOST=localhost');
putenv('DB_QS_CONDOMINIO_PORT=3306');
putenv('DB_QS_CONDOMINIO_DBNAME=db_qscondominio');
putenv('DB_QS_CONDOMINIO_USER=root');
putenv('DB_QS_CONDOMINIO_PASSWORD=');
putenv('JWT_SECRET_KEY=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjA1MjAxNyIsIm5hbWUiOiJSYWZhZWwgQWd1aWFyIiwiaWF0IjoxNTE2MjM5MDIyfQ.iNBxAezDUHZ0IhtfDQ3E_Pr7CZ2tHCkKMM9bPH-C6sI');
