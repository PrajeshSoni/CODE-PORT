# Coding Standards

## 1. General Coding Guidelines

-   Follow consistent naming conventions (e.g., camelCase for variables, PascalCase for classes).
-   Write clear and concise comments for complex logic.
-   Avoid hardcoding values; use constants or configuration files.
-   Ensure code is modular and reusable.
-   Use version control (e.g., Git) for all changes.

## 2. Folder/File Structure

-   Organize files logically:
    -   `app/` for application logic.
    -   `resources/views/` for Blade templates.
    -   `public/` for assets like CSS, JS, and images.
    -   `routes/` for route definitions.
-   Use descriptive file and folder names.
-   Group related files together (e.g., controllers, models, services).

## 3. Laravel Coding Standards

-   Follow PSR-12 coding standards.
-   Use Eloquent ORM for database interactions.
-   Define relationships in models (e.g., `hasMany`, `belongsTo`).
-   Use route model binding where applicable.
-   Keep controllers thin; move business logic to services or models.

## 4. JavaScript

-   Use ES6+ syntax (e.g., `let`, `const`, arrow functions).
-   Avoid global variables; use modules or namespaces.
-   Use meaningful variable and function names.
-   Lint your code using tools like ESLint.
-   Example:
    ```javascript
    // Example: Fetching data with async/await
    async function fetchData(url) {
        try {
            const response = await fetch(url);
            const data = await response.json();
            console.log(data);
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }
    ```

## 5. Database/Migration Standards

-   Use descriptive table and column names.
-   Always include timestamps (`created_at`, `updated_at`).
-   Use Laravel's migration methods (`table->string()`, `table->integer()`) for schema definitions.
-   Example:
    ```php
    // Example: Creating a users table
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamps();
    });
    ```

## 6. HTML/CSS Example

-   Use semantic HTML tags (`<header>`, `<footer>`, `<article>`).
-   Follow a mobile-first approach in CSS.
-   Use BEM (Block Element Modifier) for class naming.
-   Example:

    ```html
    <!-- Example: Semantic HTML with BEM -->
    <div class="card">
        <header class="card__header">Title</header>
        <div class="card__body">Content</div>
        <footer class="card__footer">Footer</footer>
    </div>
    ```

    ```css
    /* Example: BEM CSS */
    .card {
        border: 1px solid #ccc;
        padding: 16px;
    }
    .card__header {
        font-weight: bold;
    }
    .card__body {
        margin: 8px 0;
    }
    .card__footer {
        text-align: right;
    }
    ```

## 7. Error Handling

-   Use Laravel's built-in error handling (`try-catch` blocks, custom exceptions).
-   Log errors using Laravel's `Log` facade.
-   Display user-friendly error messages.
-   Example:
    ```php
    // Example: Handling exceptions in a controller
    public function store(Request $request) {
        try {
            $data = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
            ]);
            User::create($data);
            return response()->json(['message' => 'User created successfully']);
        } catch (\Exception $e) {
            Log::error('Error creating user: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to create user'], 500);
        }
    }
    ```
