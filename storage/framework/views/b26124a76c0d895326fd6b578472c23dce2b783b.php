<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <link rel="stylesheet" href="css/other.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/faq.js"></script>
    <script src="https://use.fontawesome.com/cc93d367a5.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container">
        <div id="css3-animated-example">
            <h3>Hello</h3>
            <div>
                <div class="content">
                    <p>This example simply sets a class attribute to the details and let's an
                        external stylesheet toggle the collapsed state.</p>
                    <p>Hello Sir.</p>
                    <p>I'm sliding</p>
                </div>
            </div>
            <h3>Friend</h3>
            <div>
                <div class="content">
                    <p>This example simply sets a class attribute to the details and let's an
                        external stylesheet toggle the collapsed state.</p>
                    <p>Hello Sir.</p>
                </div>
            </div>
            <h3>Foe</h3>
            <div>
                <div class="content">
                    <p>This example simply sets a class attribute to the details and let's an
                        external stylesheet toggle the collapsed state.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#css3-animated-example").collapse({
            accordion: true,
            open: function() {
                this.addClass("open");
                this.css({ height: this.children().outerHeight() });
            },
            close: function() {
                this.css({ height: "0px" });
                this.removeClass("open");
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>