Вы запросили сброс пароля на сайте Консультативной поликлиники БУЗ ВО ВОКБ №2. Если Вы этого не делали проигнорируйте это сообщение, иначе перейдите по ссылке для сброса пароля : <a href="<?php echo e($link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset())); ?>"> <?php echo e($link); ?> </a>
