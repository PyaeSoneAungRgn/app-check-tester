<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
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
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Firebase App Check Tester</h2>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="w-full text-center">
            @if (session()->has('appId'))
              <span class="inline-flex items-center gap-x-1.5 rounded-full bg-green-100 px-1.5 py-0.5 text-xs font-medium text-green-700">
                <svg class="h-1.5 w-1.5 fill-green-500" viewBox="0 0 6 6" aria-hidden="true">
                  <circle cx="3" cy="3" r="3" />
                </svg>
                {{ 'App ID: ' . session('appId') }}
              </span>
            @endif
            @if (session()->has('errorMessage'))
              <span class="inline-flex items-center gap-x-1.5 rounded-full bg-red-100 px-1.5 py-0.5 text-xs font-medium text-red-700">
                <svg class="h-1.5 w-1.5 fill-red-500" viewBox="0 0 6 6" aria-hidden="true">
                  <circle cx="3" cy="3" r="3" />
                </svg>
                {{ 'Error: ' . session('errorMessage') }}
              </span>
            @endif
        </div>
        <form class="space-y-6" action="{{ route('verifyAppCheckToken') }}" method="POST">
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
            <p class="mt-1 text-xs leading-6 text-gray-500">We do not store Service Account JSON.</p>
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
