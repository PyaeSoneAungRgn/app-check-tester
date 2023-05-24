<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RRJ979PFZP"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-RRJ979PFZP');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Firebase App Check Tester</title>
    <meta name="description" content="Online tool for testing Firebase App Check Token"/>

    <meta property="og:title" content="Firebase App Check Tester"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://appcheck.vercel.app/"/>
    <meta property="og:image" content="https://appcheck.vercel.app/banner.png"/>
    <meta property="og:description" content="Online tool for testing Firebase App Check Token" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  </head>
  <body style="font-family: 'Poppins', sans-serif;" class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm md:max-w-md">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Firebase App Check Tester</h2>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm md:max-w-md">
        @if (session()->has('appId'))
          <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
              <div class="flex-shrink-0">
                <CheckCircleIcon class="h-5 w-5 text-green-400" aria-hidden="true" />
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-green-800">{{ 'App ID: ' . session('appId') }}</p>
              </div>
            </div>
          </div>
        @endif
        @if (session()->has('errorMessage'))
          <div class="rounded-md bg-red-50 p-4">
            <div class="flex">
              <div class="flex-shrink-0">
                <XCircleIcon class="h-5 w-5 text-red-400" aria-hidden="true" />
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-red-800">{{ session('errorMessage') }}</p>
              </div>
            </div>
          </div>
        @endif
        <form class="mt-4 space-y-6" action="{{ route('verifyAppCheckToken') }}" method="POST">
          @csrf
          <div>
            <label for="app_check_token" class="block text-sm font-medium leading-6 text-gray-900">App Check Token</label>
            <div class="mt-2">
              <div class="mt-2">
                <textarea autofocus id="app_check_token" name="app_check_token" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-500 sm:text-sm sm:leading-6">{{ old('app_check_token') }}</textarea>
            </div>
            </div>
            @error('app_check_token')
              <p class="mt-1 text-sm leading-6 text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="service_account_json" class="block text-sm font-medium leading-6 text-gray-900">Service Account JSON</label>
            <div class="mt-2">
                <textarea id="service_account_json" name="service_account_json" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-500 sm:text-sm sm:leading-6">{{ old('service_account_json') }}</textarea>
            </div>
            @error('service_account_json')
              <p class="mt-1 text-sm leading-6 text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-amber-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500">Verify Token</button>
            <p class="mt-1 text-xs leading-6 text-gray-600">We do not store Service Account JSON. <a class="text-blue-600" href="https://github.com/PyaeSoneAungRgn/appcheck#local-developement">Read more</a></p>
          </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
          Github Repo:
          <a href="https://github.com/PyaeSoneAungRgn/appcheck" class="font-semibold leading-6 text-amber-500 hover:text-amber-400">PyaeSoneAungRgn/appcheck</a>
        </p>
      </div>
    </div>
  </body>
</html>
