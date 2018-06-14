<div class="container-fluid bg-2 text-center">
	<div class="row">
		<?php if ($this->session->flashdata('error') == TRUE): ?>
			<p><?php echo $this->session->flashdata('error'); ?></p>
		<?php endif; ?>

		<?php if ($this->session->flashdata('success') == TRUE): ?>
			<p><?php echo $this->session->flashdata('success'); ?></p>
		<?php endif; ?>
		
		<div class="col-md-6">
			<?php $this->load->view('cadastro_usuario'); ?>
		</div>

		<div class="col-md-6">
			<?php $this->load->view('login_usuario'); ?>
		</div>
	</div>
</div>