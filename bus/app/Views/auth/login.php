<?= $this->extend('layouts/main') ?>


<?= $this->section('content') ?>

<div class="container ftco-animate">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-8">
            <div class="card bg-dark text-white p-0 shadow-lg rounded">
                <div class="row no-gutters">
                    <!-- Left side with background image and text -->
                    <div class="col-md-5 d-flex align-items-center justify-content-center"
                        style="background-image: url('img/about.jpg'); background-size: cover; background-position: center; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
                        <div class="text-center p-4" style="background: rgba(0, 0, 0, 0.5); border-radius: 0px;">
                            <h3 class="text-white">Bienvenue!</h3>
                            <p class="text-white-50">Connectez-vous pour continuer votre aventure avec AgadirWay.</p>
                        </div>
                    </div>

                    <!-- Right side with the form -->
                    <div class="col-md-7">
                        <div class="p-4">
                            <h3 class="text-center mb-4" style="color: chocolate;">Connectez-vous</h3>
                            <?php $errors = session()->getFlashdata('errors'); ?>

                            <?php if (session()->getFlashdata('success')): ?>
                            <div class="message success">
                                <?= session()->getFlashdata('success'); ?>
                            </div>
                            <?php endif; ?>

                            <?php if (session()->getFlashdata('error')): ?>
                            <div class="message error">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                            <?php endif; ?>

                            <?php if (session()->getFlashdata('warning')): ?>
                            <div class="message warning">
                                <?= "Warning : " . session()->getFlashdata('warning'); ?>
                            </div>
                            <?php endif; ?>
                            <?php if (isset($errors['email'])):; ?>
                            <div class="message error">
                                <?= $errors['email'] ?>
                            </div>
                            <?php endif; ?>
                            <?php if (isset($errors['password'])):; ?>
                            <div class="message error">
                                <?= $errors['password'] ?>
                            </div>
                            <?php endif; ?>
                            <form action="/login" method="post">
                                <div class="form-group">

                                    <label for="email" class="text-white">Adresse e-mail</label>
                                    <input type="email" id="email" name="email" class="form-control bg-dark text-white"
                                        placeholder="Entrez votre email" value="<?= old('email') ?>">
                                </div>
                                <div class="form-group">

                                    <label for="password" class="text-white">Mot de passe</label>
                                    <input type="password" id="password" name="password"
                                        class="form-control bg-dark text-white" placeholder="Entrez votre mot de passe"
                                        value="<?= old('password') ?>">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary w-100"
                                        style="background-color: chocolate; border-color: chocolate;">Se
                                        connecter</button>
                                </div>
                                <p class="text-center mt-3">
                                    <a href="/register" style="color: chocolate;">Créer un compte</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>