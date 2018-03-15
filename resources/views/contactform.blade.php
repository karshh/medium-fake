@extends('layout')

@section('content')

	<h3 align="middle"> Contact us </h3>
	<br>
    <?php if($message = session('message')): ?>
        <div class="alert alert-success">
            <?php echo $message ?>
        </div>
    <?php endif; ?>


    <form method="post">
        <?php echo csrf_field() ?>

        @include('forms.group', [
            'type' => 'text',
            'label' => 'Name',
            'name' => 'name'
        ])

        @include('forms.group', [
            'type' => 'email',
            'label' => 'Email',
            'name' => 'email'
        ])


        @include('forms.group', [
            'type' => 'title',
            'label' => 'Title',
            'name' => 'title'
        ])
        @include('forms.textarea', [
            'label' => 'Message',
            'name' => 'message',
            'rows' => '5'
        ])

        <input type="submit" name="" value="Submit">
    </form>
@endsection