# php-lab-1
Створюємо клас User який:
зберігає в собі інформацію про логін, пароль, ім'я, прізвище, роль.
 повинен вміти авторизуватися на сайт і виводити вітання в залежності від ролі (щось на зразок "Привіт менеджер Іван Іванов. Ви можете на сайті змінювати, видаляти і створювати клієнтів",
"Здрастуйте клієнт Афанасій Авдотьєв. Ви можете на сайті переглядати інформацію доступну користувачам ",
"Здрастуйте адмін Ада Байрон. Ви можете на сайті робити все ")
Від нього успадковуємо класи admin, client, manager.
Створюємо форму авторизації де вводитися логін і пароль. Якщо введений логін і пароль клієнта, створюємо клас клієнта і викликаємо його вітання, якщо введений клас менеджера створюємо клас менеджера і виводимо його вітання, відповідно для адміна.

Разом у нас повинно вийти:
форма введення логіна і пароля (щоб уникнути зливу пароля метод передачі даних - POST)
висновок на екран вітання увійшов користувача
висновок помилки про невірність логіна і пароля при введенні даних які не підходять жодному користувачеві.
