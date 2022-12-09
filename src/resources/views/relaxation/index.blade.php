@extends('layout')

@section('content')
<div class="text-white">
<script src="{{ asset('JavaScript/audio.js') }}"></script>

  <h2>雨の音</h2>
  <audio controls loop src="/audio/雨の音.mp3"></audio>
</div>


@endsection