<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>QR Generator</title>
    <style>
      button[role="tab"] {
        border-color: transparent;
        color: inherit;
        transition: border-color 0.3s, color 0.3s;
      }

      button[role="tab"]:hover {
        color: gray;
        border-color: lightgray;
      }

      button[role="tab"][aria-selected="true"] {
        border-color: #028a7c !important;
        color: #028a7c !important;
      }

      button[role="tab"]:focus {
        outline: none;
        border-color: #028a7c !important;
        color: #028a7c !important;
        font-weight: 700;
      }
    </style>
  </head>
  <body class="mb-20">
    <nav class="bg-[#009788] py-4">
      <div
        class="container mx-auto flex justify-between text-white font-bold items-center px-5"
      >
        <div class="text-xl">QR Code Generator</div>
        <div class="text-sm space-x-4">
          <a href="">Demo</a>
          <a href="/download.html">Download Now</a>
        </div>
      </div>
    </nav>

    <section class="bg-[#028A7C] py-20">
      <div
        class="container mx-auto lg:flex justify-between items-center text-white px-5"
      >
        <div>
          <h1 class="text-3xl lg:text-5xl font-bold mb-6">QR Code generator</h1>
          <p class="text-xl text-white">
            Generate your personal QR Code in few clicks! <br />
            Upload your logo, select custom colors and download the final
            QRcode. <br />
            Available formats: .png, .svg, .pdf
          </p>
        </div>
        <div>
          <img src="{{'front-end/images/banner.png'}}" alt="" />
        </div>
      </div>
    </section>

    <section
      class="container mx-auto px-5 mt-20 grid grid-cols-3 gap-10 justify-between"
    >
      <div class="col-span-2">
        <form id="qr-form">
          <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul
              class="flex flex-wrap -mb-px text-sm font-medium text-center"
              id="default-tab"
              data-tabs-toggle="#default-tab-content"
              role="tablist"
            >
              <li class="me-2" role="presentation">
                <button
                  class="inline-block p-4 border-b-2 rounded-t-lg"
                  id="profile-tab"
                  data-tabs-target="#profile"
                  type="button"
                  role="tab"
                  aria-controls="profile"
                  aria-selected="false"
                >
                  Link
                </button>
              </li>
              <li class="me-2" role="presentation">
                <button
                  class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                  id="dashboard-tab"
                  data-tabs-target="#dashboard"
                  type="button"
                  role="tab"
                  aria-controls="dashboard"
                  aria-selected="false"
                >
                  Phone
                </button>
              </li>
              <li class="me-2" role="presentation">
                <button
                  class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                  id="settings-tab"
                  data-tabs-target="#settings"
                  type="button"
                  role="tab"
                  aria-controls="settings"
                  aria-selected="false"
                >
                  Text
                </button>
              </li>
              <li role="presentation">
                <button
                  class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                  id="contacts-tab"
                  data-tabs-target="#contacts"
                  type="button"
                  role="tab"
                  aria-controls="contacts"
                  aria-selected="false"
                >
                  Email
                </button>
              </li>
              <li role="presentation">
                <button
                  class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                  id="location-tab"
                  data-tabs-target="#location"
                  type="button"
                  role="tab"
                  aria-controls="location"
                  aria-selected="false"
                >
                  Location
                </button>
              </li>
              <li role="presentation">
                <button
                  class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                  id="sms-tab"
                  data-tabs-target="#sms"
                  type="button"
                  role="tab"
                  aria-controls="sms"
                  aria-selected="false"
                >
                  SMS
                </button>
              </li>
              <li role="presentation">
                <button
                  class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                  id="whatsapp-tab"
                  data-tabs-target="#whatsapp"
                  type="button"
                  role="tab"
                  aria-controls="whatsapp"
                  aria-selected="false"
                >
                  Whatsapp
                </button>
              </li>
            </ul>
          </div>
          <div id="default-tab-content">
            <div
              class="hidden"
              id="profile"
              role="tabpanel"
              aria-labelledby="profile-tab"
            >
              <h2 class="text-3xl font-bold mb-6">Link</h2>
              <label for="url">Website URL</label>
              <input
                type="text"
                name="url"
                id="url"
                placeholder="Enter your URL"
                class="block w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
              />
            </div>
            <div
              class="hidden"
              id="dashboard"
              role="tabpanel"
              aria-labelledby="dashboard-tab"
            >
              <h2 class="text-3xl font-bold mb-6">Phone</h2>
              <label for="phone">Phone Number</label>
              <input
                type="text"
                name="phone"
                id="phone"
                placeholder="Enter your Number"
                class="block w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
              />
            </div>
            <div
              class="hidden"
              id="settings"
              role="tabpanel"
              aria-labelledby="settings-tab"
            >
              <h2 class="text-3xl font-bold mb-6">Text</h2>
              <label for="text">Message</label>
              <textarea
                name="text"
                id="text"
                placeholder="Enter your Number"
                class="block w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
              ></textarea>
            </div>
            <div
              class="hidden"
              id="contacts"
              role="tabpanel"
              aria-labelledby="contacts-tab"
            >
              <h2 class="text-3xl font-bold mb-6">Email</h2>
              <div class="lg:flex gap-6 mb-6">
                <div>
                  <label for="email-to">Sent To</label>
                  <input
                    type="email"
                    name="email_to"
                    id="email-to"
                    placeholder="Enter Email"
                    class="w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
                  />
                </div>
                <div>
                  <label for="email-subject">Subject</label>
                  <input
                    type="text"
                    name="email_subject"
                    id="email-subject"
                    placeholder="Enter Number"
                    class="w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
                  />
                </div>
              </div>
              <label for="email-text">Text</label>
              <textarea
                name="email_text"
                id="email-text"
                placeholder="Write something..."
                class="block w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
              ></textarea>
            </div>
            <div
              class="hidden"
              id="location"
              role="tabpanel"
              aria-labelledby="location-tab"
            >
              <h2 class="text-3xl font-bold mb-6">Location</h2>
              <div class="lg:flex gap-6 mb-6">
                <div>
                  <label for="latitude">Latitude</label>
                  <input
                    type="number"
                    name="latitude"
                    id="latitude"
                    placeholder="Enter Latitude"
                    class="w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
                  />
                </div>
                <div>
                  <label for="longitude">Longitude</label>
                  <input
                    type="number"
                    name="longitude"
                    id="longitude"
                    placeholder="Enter Longitude"
                    class="w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
                  />
                </div>
              </div>
            </div>
            <div
              class="hidden"
              id="sms"
              role="tabpanel"
              aria-labelledby="sms-tab"
            >
              <h2 class="text-3xl font-bold mb-6">SMS</h2>
              <div class="lg:flex gap-6 mb-6">
                <div>
                  <label for="sms-country-code">Country Code</label>
                  <input
                    type="text"
                    name="sms_country_code"
                    id="sms-country-code"
                    placeholder="Enter Country Code"
                    class="w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
                  />
                </div>
                <div>
                  <label for="sms-number">Number</label>
                  <input
                    type="text"
                    name="sms_number"
                    id="sms-number"
                    placeholder="Enter Number"
                    class="w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
                  />
                </div>
              </div>
              <label for="sms-text">Text</label>
              <textarea
                name="sms_text"
                id="sms-text"
                placeholder="Write something..."
                class="block w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
              ></textarea>
            </div>
            <div
              class="hidden"
              id="whatsapp"
              role="tabpanel"
              aria-labelledby="whatsapp-tab"
            >
              <h2 class="text-3xl font-bold mb-6">Whatsapp</h2>
              <div class="lg:flex gap-6 mb-6">
                <div>
                  <label for="whatsapp-country-code">Country Code</label>
                  <input
                    type="text"
                    name="whatsapp_country_code"
                    id="whatsapp-country-code"
                    placeholder="Enter Country Code"
                    class="w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
                  />
                </div>
                <div>
                  <label for="whatsapp-number">Number</label>
                  <input
                    type="text"
                    name="whatsapp_number"
                    id="whatsapp-number"
                    placeholder="Enter Number"
                    class="w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
                  />
                </div>
              </div>
              <label for="whatsapp-text">Text</label>
              <textarea
                name="whatsapp_text"
                id="whatsapp-text"
                placeholder="Write something..."
                class="block w-full mt-4 border px-2 py-2 rounded-md border-[#009788] focus:outline-none focus:border-black"
              ></textarea>
            </div>
          </div>
          <div class="mt-10">
            <h2 class="text-3xl font-bold mb-4">Visibleness</h2>
            <p>Customize the style and template.</p>
            <div class="grid lg:grid-cols-8 gap-4 mt-6">
              <img src="{{ asset('front-end/images/qr1.png') }}" alt="" data-value="qr1" onclick="setImageValue('round')" />
              <img src="{{ asset('front-end/images/qr2.png') }}" alt="" data-value="qr2" onclick="setImageValue('square')" />
              <img src="{{ asset('front-end/images/qr3.png') }}" alt="" data-value="qr3" onclick="setImageValue('qr3')" />
              <img src="{{ asset('front-end/images/qr4.png') }}" alt="" data-value="qr4" onclick="setImageValue('qr4')" />
              <img src="{{ asset('front-end/images/qr5.png') }}" alt="" data-value="qr5" onclick="setImageValue('qr5')" />
              <img src="{{ asset('front-end/images/qr6.png') }}" alt="" data-value="qr6" onclick="setImageValue('qr6')" />
              <img src="{{ asset('front-end/images/qr7.png') }}" alt="" data-value="qr7" onclick="setImageValue('qr7')" />
              <img src="{{ asset('front-end/images/qr8.png') }}" alt="" data-value="qr8" onclick="setImageValue('qr8')" />
              <input type="hidden" name="style" id="selected_image" value="">
            </div>
          </div>
        </form>
      </div>
      <div class="mx-auto border border-[#009788] px-20 py-10 rounded-md">
        <img src="{{ asset('front-end/images/QR.png') }}" alt="" />
        <div class="mt-10 flex justify-around items-center">
          <button
            class="text-white font-bold bg-[#009788] px-6 py-2 rounded-md"
            onclick="submitForm()"
          >
            Generate QR
          </button>
          <img src="{{ asset('front-end/images/share.png') }}" alt="" class="w-12" />
        </div>
      </div>
    </section>

    <footer class="mt-32">
      <h1 class="text-center text-[#028A7C] text-2xl font-bold">
        QR Code Generator
      </h1>
      <hr class="my-6" />
      <div
        class="lg:flex justify-between items-center container mx-auto text-sm"
      >
        <p>© 2024 QR Code Generator. All rights reserved.</p>
        <div class="space-x-4">
          <a href="">Terms</a><a href="">Privacy</a><a href=""></a>Cookies
        </div>
      </div>
    </footer>

    <script>
      function setImageValue(value) {
          document.getElementById('selected_image').value = value;
        }
      function submitForm() {
        const form = document.getElementById("qr-form");
        const formData = new FormData(form);
        const data = {};

        formData.forEach((value, key) => {
          if (value) {
            data[key] = value;
          }
        });
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "/store", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken); 
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
              if(xhr.status === 200){
                const responseData = JSON.parse(xhr.responseText);
                const filename = responseData.filename;  
                window.location.href = `{{ route('show', ['filename' => ':filename']) }}`.replace(':filename', filename);
              }
              form.reset();
            }
        };
        xhr.send(JSON.stringify(data));
      }
    </script>
  </body>
</html>
