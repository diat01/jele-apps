# Laravel API Проект

Этот проект представляет собой пример разработки API с использованием Laravel 12. Включает endpoints для регистрации
пользователей и управления профилем.

## Возможности

- Регистрация пользователей (email, password, gender)
- Информация профиля пользователя
- API аутентификация через Sanctum
- Форматирование данных через Laravel Resources
- Использование Enum (для поля gender)
- Автоматические JSON ответы через Middleware

## Установка

1. Клонируйте проект:
   ```bash
   git clone https://github.com/diat01/jele-apps
   cd jele-apps
   ```

2. Установите зависимости:
   ```bash
   composer install
   ```

3. Настройте переменные окружения:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Настройте базу данных и выполните миграции:
   ```bash
   php artisan migrate
   ```



## API Endpoints

### Регистрация пользователя

**URL:** `POST /api/register`

**Request:**

```json
{
    "email": "test@example.com",
    "password": "password123",
    "gender": "male"
}
```

**Response:**

```json
{
    "data": {
        "user": {
            "id": 1,
            "email": "test@example.com",
            "gender": "male",
            "created_at": "2023-12-01T12:00:00.000000Z"
        },
        "token": "1|abcdef123456"
    }
}
```

### Информация профиля

**URL:** `GET /api/profile`

**Headers:**

```
Authorization: Bearer [token]
Accept: application/json
```

**Response:**

```json
{
    "data": {
        "id": 1,
        "email": "test@example.com",
        "gender": "male",
        "created_at": "2023-12-01T12:00:00.000000Z"
    }
}
```

## Используемые технологии

- Laravel 12
- Laravel Sanctum (API аутентификация)
- PHP 8.2+
- MySQL/PostgreSQL/SQLite

## Как внести вклад

1. Форкните репозиторий (<https://github.com/diat01/jele-apps/fork>)
2. Создайте новую ветку (`git checkout -b feature/fooBar`)
3. Зафиксируйте изменения (`git commit -am 'Add some fooBar'`)
4. Запушьте изменения (`git push origin feature/fooBar`)
5. Создайте Pull Request

## Скриншоты

![Postman Регистрация](docs/screenshots/register.png)
![Postman Профиль](docs/screenshots/profile.png)

## Postman коллекция

Для тестирования API вы можете импортировать Postman коллекцию:
[Импортировать коллекцию Postman](https://app.getpostman.com/join-team?invite_code=37f88adedda0c3d1b3cd0bc76e37545e3d11a098a60521224d6698108125a971&target_code=fa0bc17ad3a11c1d9aee0a0166808aa2)

## Контакты

Автор проекта: Atageldi Didarov - didarov.atageldi@gmail.com

Ссылка на проект: [https://github.com/diat01/jele-apps](https://github.com/diat01/jele-apps)
