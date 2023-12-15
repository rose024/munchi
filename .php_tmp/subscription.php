<?php
    include('partials/header.php');
?>

<main class="subscription">

    <div class="subscription__container">

        <div class="subscription__container_section1">
            <div class="flex-row subscription__container_sectiontitle">
                <div><img src="./assets/img/Asset 4.png" alt="" class="subscription__container_numbering"></div>
                <h2>Personal Purchase</h2>
            </div>
            <div>
                <Button class="subscription__btn">I'm Buying for Myself</Button>
                <Button class="subscription__btn">Putchasing as a Gift</Button>
            </div>
        </div>

        <div class="subscription__container_section2">
        <div class="flex-row subscription__container_sectiontitle">
                <div><img src="./assets/img/Asset 3.png" alt="" class="subscription__container_numbering"></div>
                <h2>Subscription Type</h2>
            </div>
            <div class="flex-row">
                <div class="flex-column" style="margin-right: 17px">
                    <img src="./assets/img/7.jpg" alt="" class="subscription__container_boxtype">
                    <Button class="subscription__btn">For Individual</Button>
                </div>
                <div class="flex-column">
                    <img src="./assets/img/1.jpg" alt="" class="subscription__container_boxtype">
                    <Button class="subscription__btn">For Family</Button>
                </div>

            </div>
        </div>

        <div class="subscription__container_section3">
            <div class="flex-row subscription__container_sectiontitle">
                <div><img src="./assets/img/Asset 2.png" alt="" class="subscription__container_numbering"></div>
                <h2>Choose Your Billing Frequency</h2>
            </div>
            <div>
                <Button class="subscription__btn">Monthly</Button>
                <Button class="subscription__btn">Bi-weekly</Button>
            </div>
        </div>

        <div class="subscription__container_section4">
            <div class="flex-row subscription__container_sectiontitle">
                <div><img src="./assets/img/Asset 1.png" alt="" class="subscription__container_numbering"></div>
                <h2>Select a Theme</h2>
            </div>
            <div>
                <Button class="subscription__btn">Nordic</Button>
                <Button class="subscription__btn">Far East Asia</Button>
                <Button class="subscription__btn">Southeast Asia</Button>
                <Button class="subscription__btn">Eastern Europe</Button>
            </div>
        </div>

        <div style="margin: 60px; text-align: center;">
            <img src="./assets/img/Asset 7.png" alt="">
        </div>

    </div>

</main>

<?php
    include('partials/footer.php');
?>