<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/SVG/logo.svg')); ?>" sizes="196x196" type="image/x-icon">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" />
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- SWIPER SLIDER CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper-bundle.css')); ?>" />
    <!-- Butter JS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/butter.css')); ?>">
    <!--WOW JS  -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/wow.css')); ?>">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/stylesheet.css')); ?>">
    <title>South-Dakota-Bride | Home</title>
</head>
<body onload="activePage()">

<?php echo $__env->yieldContent('content'); ?>
<footer>
    <div class="copyright">
        <p class="text-center">
            2022 All copyrights reserved by VenU2Go
            <span>
                Design &amp; Development by <a href="https://designprosusa.com/" target="_blank">
                    Design Pros USA.
                </a>
            </span>
        </p>
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $(".header").addClass("fixedHeader");
        } else {
            $(".header").removeClass("fixedHeader");
        }
    });
</script>
<script>
    function activePage() {
        let currenLocation = window.location.href;
        let headerNav = document.getElementsByClassName('link_header');
        for (let i = 0; i < headerNav.length; i++) {
            if (currenLocation == headerNav[i].href) {
                headerNav[i].classList.add('active')
            }
        }
    }
</script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/website/layout/master.blade.php ENDPATH**/ ?>