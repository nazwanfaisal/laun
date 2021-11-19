<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; {{App\Setting::where('slug','nama-toko')->get()->first()->description}} {{date('Y')}} | Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>arulwan.com</a>
            </span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
