<?php
include './inc/conn.php';
include './inc/form.php';
include './inc/dp_close.php';
include './inc/res.php';
?>

<?php include_once './parts/header.php'; ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto">
        <img id="logo" src="./images/tai.png" alt="university logo">
        <h1 class="display-4 fw-normal">المتبقي على نهاية الترم الدراسي</h1>
        <p class="lead fw-normal">باقي على الترم</p>
        <h3 id="countdown" class="count"></h3>
        <p class="lead fw-normal">حتى نهاية الترم الاول</p>
    </div>
    <div class="container">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">بداية العام الدراسي 2023/08/20</li>
            <li class="list-group-item">اجازة منتصف الترم الدراسي الاول 2023/11/16</li>
            <li class="list-group-item">بداية اجازة منتصف العام الدراسي 2024/01/04</li>
        </ul>
    </div>
</div>


<div class="container">

    <div class="position-relative text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">

            <form class="mt-5" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <h3>الرجاء ادخل معلوماتك</h3>
                <h5>للتسجيل في السحب على جوائز مالية نهاية الترم الدراسي</h5>
                <div class="mb-3">
                    <label for="firstName" class="form-label">الاسم الأول</label>
                    <input type="text" name="firstName" value="<?php echo $firstName ?>" class="form-control"
                        id="firstName" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text error">
                        <?php echo $errors['firstNameError'] ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">الاسم الأخير</label>
                    <input type="text" name="lastName" value="<?php echo $lastName ?>" class="form-control"
                        id="lastName" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text error">
                        <?php echo $errors['lastNameError']; ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
                    <input type="text" name="email" value="<?php echo $email ?>" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text error">
                        <?php echo $errors['emailError']; ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">ارسال</button>
            </form>

        </div>
    </div>
</div>
<div class="loadercon">
    <div id="loader" class="load">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">

    <button id="winner" type="button" class="btn btn-primary">
        اختيار الرابح
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <?php foreach ($users as $user): ?>
                    <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
                <?php endforeach; ?>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php foreach ($users as $user): ?>
                <h1 class="display-3 text-center modal-title" id="modalLabel">
                    <?php echo htmlspecialchars($user['firstName']) . " " . htmlspecialchars($user['lastName']) ?>
                </h1>
            <?php endforeach; ?>


        </div>
    </div>
</div>

<!--
    <div id="cards" class="row mb-5 pd-5">
    <div class="col-sm-6">
        <div class="card my-2 bg-light">
            <div class="card-body">
                <h5 class="card-title">
                    
                </h5>
                <p class="card-text">
                <?php echo htmlspecialchars($user['email']); ?>
                </p>
            </div>
        </div>
    </div>
</div>
                -->

<?php include_once './parts/footer.php'; ?>