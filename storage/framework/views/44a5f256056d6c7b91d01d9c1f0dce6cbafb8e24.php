<?php $__env->startSection('content'); ?>
<style>
	INPUT.enter:valid {border-color: green; }
	INPUT.enter:invalid {border-color: red; }
	INPUT.enter:required {font-weight: bold; }
	INPUT.enter:optional {font-style: italic; }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
                <div class="panel-heading">Добро пожаловать</div>
				
                <div class="panel-body">
                    <div class="col-md-6 col-md-offset-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Запись на приём к врачу
									<div class="panel-control pull-right hidden">
									</div>
								</h3>
							</div>
							<div class="panel-body">
								<form action="/pol_req" method="get">
									<div class="form-group">
										<label for="polis">№ Страхового полиса</label>
										<input oninput="validatePolis(this)" TYPE="text" class="form-control enter" name="polis" id="polis" placeholder="XXXXXXXXXXXXXXXX" autofocus required pattern="[0-9]{16}">
									</div>
									
									<!--div class="form-group">
										<label for="tel">Врач</label>
										<select class="form-control">
										<option>Колопроктолог</option>
										<option>Хирург</option>
										<option>Онколог</option>
										<option>Терапевт</option>
										<option>Генеколог</option>
										</select>
										
									</div-->
									<!--div class="form-group text-right">
										<button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#myModal">
										Важная информация
										</button>
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
										<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
										
										<h4 class="modal-title" id="myModalLabel">Оповещение</h4>
										</div>
										<div class="modal-body high-padding text-center">
										Поликлиника принимает пациентов только по направлению врача!
										</div>
										<div class="modal-footer">
									<!--button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Закрыть</button-->
									<!--button type="button" class="btn btn-primary btn-rounded" data-dismiss="modal">Понятно</button>
										</div>
										</div>
										</div>
										</div>
									<!--/div-->
									<!--button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#myModal"-->
									<button type="submit" class="btn btn-default">Отправить</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function validatePolis(input) {
		if (input.value.length < 16) 
		{
			input.setCustomValidity("Проверьте номер полиса");   
		}
		else if(input.value.length > 16)
		{ 
			input.setCustomValidity("Возможно в номере лишняя цифра");
		}
		else {
			// Длина комментария отвечает требованию, 
			// поэтому очищаем сообщение об ошибке
			input.setCustomValidity("");
		}
	}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>