# ToDo-List-App-on-Symphony2

1. Download all files to your computer
2. Create a database with name [symfony]  ||   create database symfony;
3. Update database schema  ||  app/console doctrine:schema:update --force
4. Run server  ||  app/console ser:run
5. Create user at http://127.0.0.1:8000/register
6. Set userrole of some user to USER_ADMIN ||  UPDATE `symfony`.`app_users` SET `userrole`='ROLE_ADMIN' WHERE `id`='1';


1. Скачать все файлы к себе на компьютер
2. Создать на вашем mysql сервере базу данных с именем [symfony]  ||   create database symfony;
3. Обновить схему базы данных  ||  app/console doctrine:schema:update --force
4. Запустить сервер\приложение  ||  app/console ser:run
5. Зарегистрировать пользователя по адресу http://127.0.0.1:8000/register
6. Присвоить созданному пользователю роль администратора  ||  UPDATE `symfony`.`app_users` SET `userrole`='ROLE_ADMIN' WHERE `id`='1';
