# SewaGedung.id
## Cara Jalanin

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL. 
- You can login to adminpanel with default credentials __admin@admin.com__ - __password__
- For Paid bookings, please fill in `.env` with your Stripe credentials

## kode API
STRIPE_KEY=pk_test_51L8lC4FalylxUqMGOs51koExDirtbbghyqZ6ZIw5lKyF7oLC4Z5ThbpfzOjQljrJ8h6OxjY6He60LSTrztkbXgSV00cfH8fs1a
STRIPE_SECRET=sk_test_51L8lC4FalylxUqMGs6Q4GFpSbkN6Uje8LQutMgMPpvBB7hnpkPj0aRymkGipBzmNE6RMXGBvUnC92vrGci53vzfX00kUy5jKCb
