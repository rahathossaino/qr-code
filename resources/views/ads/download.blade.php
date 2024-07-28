<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Download QR</title>
  </head>
  <body>
    <nav class="bg-[#009788] py-4">
      <div
        class="container mx-auto flex justify-between text-white font-bold items-center px-5"
      >
        <a href="/index.html" class="text-xl">QR Code Generator</a>
        <div class="text-sm space-x-4">
          <a href="">Demo</a>
          <a href="">Download Now</a>
        </div>
      </div>
    </nav>

    <section class="bg-[#028A7C] py-20 h-screen">
      <div class="container mx-auto">
        <div class="bg-gray-200 py-10 w-full text-center rounded-md">{!! !empty($ads[0]->adCode) ? $ads[0]->adCode : null !!}</div>
        <div class="mt-10 flex flex-col items-center justify-center relative">
          <div>
            <div class="ml-20"><img src='{{asset('/qrcodes/'.$filename.'.png') }}'/></div>
            <div class="flex items-center gap-6 mt-6">
              <div
                class="bg-white text-center px-10 py-2 rounded-md text-[#009788] font-bold"
              >
                PNG
              </div>
              <div
                class="bg-white text-center px-10 py-2 rounded-md text-[#009788] font-bold"
              >
                JPEG
              </div>
              <div
                class="bg-white text-center px-10 py-2 rounded-md text-[#009788] font-bold"
              >
                SVG
              </div>
              <div
                class="bg-white text-center px-10 py-2 rounded-md text-[#009788] font-bold"
              >
                EPS
              </div>
              <div>
                <img src="{{ asset('front-end/images/white-share.png') }}" alt="" class="w-12" />
              </div>
            </div>
          </div>
          <div
            class="bg-gray-200 px-10 h-full text-center rounded-md absolute top-0 left-0"
          >
          {!! !empty($ads[1]->adCode) ? $ads[1]->adCode : null !!}
          </div>
          <div
            class="bg-gray-200 px-10 h-full text-center rounded-md absolute top-0 right-0"
          >
          {!! !empty($ads[2]->adCode) ? $ads[2]->adCode : null !!}
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
