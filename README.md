📝 Mini Blog System
A compact and extensible Laravel-based blog application featuring user authentication, post creation, and Git-powered version control. Ideal as a starter project or portfolio showcase.

🚀 Features
- 🔐 Authentication
Secure login and registration using Laravel’s built-in auth scaffolding.
- 📰 Blog Management
Users can create, read, update, and delete blog posts. Comments coming soon!
- 💅 Responsive UI
Styled with Tailwind CSS and Bootstrap for a clean and modern layout.
- 🧠 Blade Templating
Dynamic views powered by Laravel’s Blade engine for maintainable frontend logic.
- 🧪 Error Handling
Robust validation and user feedback during login, registration, and post creation.
- 🛠️ Git/GitHub Integration
Tracked and versioned using Git, hosted publicly via GitHub. Useful for collaborative work and future contributions.

📦 Tech Stack
| Layer | Tool/Framework | 
| Backend | Laravel | 
| Frontend | Blade + Tailwind | 
| Styling | Tailwind CSS & Bootstrap | 
| Auth | Laravel Fortify (or default auth) | 
| Version Control | Git + GitHub | 



⚙️ Setup Instructions
- Clone the Repo
git clone https://github.com/Sheed-d/LS-Internship.git
cd LS-Internship
- Install Dependencies
composer install
npm install && npm run dev
- Configure Environment
- Duplicate .env.example to .env
- Generate app key
php artisan key:generate
- Setup Database
php artisan migrate
- Serve the App
php artisan serve




