<div>
    <form>
        <a href="#" onclick="confirmLogout()" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
        </a>
    </form>
    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'تأكيد تسجيل الخروج',
                text: 'هل أنت متأكد أنك تريد تسجيل الخروج؟',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم، سجل الخروج',
                cancelButtonText: 'إلغاء'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').logout();
                }
            });
        }
    </script>
</div>
<?php /**PATH C:\laragon\www\pi\resources\views/auth/logout.blade.php ENDPATH**/ ?>