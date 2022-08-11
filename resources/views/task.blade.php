<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>قائمة المهام </title>
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset(" site1asset/image_F/apple-icon-57x57.png") }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset(" site1asset/image_F/apple-icon-60x60.png") }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset(" site1asset/image_F/apple-icon-72x72.png") }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset(" site1asset/image_F/apple-icon-76x76.png") }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset(" site1asset/image_F/apple-icon-114x114.png") }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset(" site1asset/image_F/apple-icon-120x120.png") }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset(" site1asset/image_F/apple-icon-144x144.png") }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset(" site1asset/image_F/apple-icon-152x152.png") }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset(" site1asset/image_F/apple-icon-180x180.png") }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset(" site1asset/image_F/android-icon-192x192.png") }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(" site1asset/image_F/favicon-32x32.png") }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset(" site1asset/image_F/favicon-96x96.png") }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(" site1asset/image_F/favicon-16x16.png") }}">
  <link rel="manifest" href="{{ asset(" site1asset/image_F/manifest.json") }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset(" site1asset/image_F/ms-icon-144x144.png") }}">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="{{ asset('site1asset/css/main.css') }}" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">

</head>

<body>
  <div class="context">
    <div id="divMessageContainer"> </div>
    <div class="container-gk">
      <header>
        <h1>قائمة المهام اليوم</h1>

        <form id="new-task-form" method="POST" action="{{ url('task') }}">
          {!! csrf_field() !!}

          <input type="submit" id="new-task-submit" onclick="displayError()" value="إضافة مهمة" />


          <input type="text" name="body" id="new-task-input" required placeholder="في ماذا تخطط أن تفعل اليوم ؟" />
        </form>
      </header>
      <main>
        @if (count($tasks))
        <section class="task-list">
          <h2><b>المهام</b></h2>
          @foreach ($tasks as $task )

          <div id="tasks">
            <div class="task">
              <div class="actions">
                {{-- form delete task --}}
                <form class="d-inline" action="{{ url('task',$task->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <button class="delete">انهاء</button>
                </form>
              </div>
              <div class="content">
                <input type="checkbox" class="cbox4" value="fourth_checkbox">
                {{-- form show Task --}}
                <label for="cbox4"> <input type="text" name="body" class="text" value="{{ $task->body }}" readonly>
                </label>

              </div>
              {{-- <input type="checkbox" style="text-align:right" name="is_complete" id="is_complete"> --}}
            </div>
          </div>
          @endforeach
    </div>
    </section>
    @else
    <div class="footer">
      <br> <br>
      <br> <br>
      <br> <br>
      <h1>!لا توجد مهام</h1>
    </div>
    @endif
    @if (count($tasks))
    <div class="conunt-task" style="direction: rtl; color:#6B7280; margin-right:20px; text-align:center"> لديك {{
      count($tasks) }} من
      المهام
    </div>

    @endif
    </main>
  </div>
  </div>


  <div class="area">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>


  <!--JavaScript only -->
  <script>

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="{{ asset('site1asset/js/main.js') }}"></script>
</body>

</html>