@extends('layout')

@section('content')

	<h3 align="middle"> Create a post, {{ Auth::user()->name }}</h3>
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
            'label' => 'Title',
            'name' => 'title'
        ])

        @include('forms.group', [
            'type' => 'text',
            'label' => 'Image URL',
            'name' => 'img'
        ])


        @include('forms.textarea', [
            'label' => 'Content',
            'name' => 'content',
            'rows' => '5'
        ])

        <input type="submit" name="" value="Submit">
    </form>
@endsection