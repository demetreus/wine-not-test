<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!Wine not template</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body class="bg-primary">
    <header>
      <!-- Header toolbar -->
      <div class="w-full bg-secondary">
        <div
          class="
            hidden
            items-center
            justify-between
            md:flex
            max-w-7xl
            w-full
            mx-auto
            h-12
            px-4
            py-3
          "
        >
          <div class="flex items-center cursor-pointer relative">
            <img src="img/icons/burger2.svg" />
            <span class="capitalize text-tertiary ml-2">Меню</span>
          </div>
          <div class="flex items-center justify-end flex-grow">
            <nav class="space-x-8 pl-12 flex items-center">
              <a
                href="#"
                class="
                  text-tertiary
                  px-3
                  py-1
                  rounded
                  border border-secondary
                  hover:border-tertiary
                  transition
                "
                >Доставка</a
              >
              <a
                href="#"
                class="
                  text-tertiary
                  px-3
                  py-1
                  rounded
                  border border-secondary
                  hover:border-tertiary
                  transition
                "
                >Оплата</a
              >
              <a
                href="mailto:bocomer@gmail.com"
                class="
                  text-tertiary
                  px-3
                  py-1
                  rounded
                  border border-secondary
                  hover:border-tertiary
                  transition
                  inline-flex
                "
              >
                <img src="img/icons/noun_envelope_577314.svg" class="mr-3" />
                <span>bocomer@gmail.com</span>
              </a>
              <span class="text-tertiary inline-flex">
                <img src="img/icons/noun_clock_577306.svg" class="mr-3" />
                9:00-22:00
              </span>
            </nav>
          </div>
        </div>
      </div>
      <!-- Main header -->
      <div
        class="
          max-w-7xl
          w-full
          mx-auto
          p-4
          grid grid-cols-3 grid-rows-2
          md:grid-cols-6
          lg:grid-cols-9
          xl:grid-cols-12
        "
      >
        <!-- Header logo -->
        <div class="col-span-1 row-span-1 md:row-span-2 lg:col-span-2">
          <a href="#">
            <img
              src="img/logo_header.png"
              alt="wine not logo"
              class="object-contain w-35 h-auto"
            />
          </a>
        </div>
        <!-- Header actions -->
        <div
          class="
            col-span-2
            md:col-start-5
            lg:col-start-7 lg:col-span-3
            xl:col-start-9 xl:col-span-4
            gap-x-6
            flex
            items-center
            justify-end
            md:justify-around
            lg:justify-end
          "
        >
          <a href="#" class="text-tertiary inline-flex">
            <img src="img/icons/map_pin.svg" class="mr-2" />
            <span
              class="hidden lg:inline border-b-2 border-dashed border-secondary"
              >Язык</span
            >
            <img src="img/icons/arrow-down.svg" class="ml-2 hidden lg:inline" />
          </a>
          <a href="#" class="text-tertiary inline-flex">
            <img src="img/icons/profile.svg" class="mr-2 md:w-35" />
            <span class="hidden lg:inline">Аккаунт</span>
          </a>
          <a href="#" class="text-tertiary inline-flex relative">
            <span
              class="
                absolute
                -left-3
                -bottom-5
                w-6
                h-6
                rounded-full
                font-bold
                bg-secondary
                flex
                justify-center
                items-center
              "
              >3</span
            >
            <img src="img/icons/basket.svg" class="mr-2" />
            <div class="relative hidden lg:inline">
              <span>Корзина</span>
              <span class="absolute left-0 -bottom-4 text-secondary font-bold"
                >1000 &#x20ac;</span
              >
            </div>
          </a>
          <a href="#" class="text-tertiary inline-flex md:hidden">
            <img src="img/icons/burger.svg" class="mr-2" />
          </a>
        </div>
        <!-- Search -->
        <div
          class="
            relative
            row-start-2
            col-span-3
            md:row-start-1
            md:col-start-2 md:col-span-3
            lg:col-span-4 lg:col-start-3
            xl:col-start-4 xl:col-span-4
            md:w-3/4
            flex
            items-center
            md:mx-auto
            xl:w-full
          "
        >
          <input
            type="search"
            name="search"
            class="
              w-full
              h-12
              pl-4
              pr-16
              text-base text-tertiary
              placeholder-tertiary placeholder-opacity-25
              bg-primary
              border border-secondary
              focus:outline-none
              rounded-md
            "
            placeholder="Искать"
          />
          <button type="submit" class="absolute right-0 h-12 px-6">
            <img src="img/icons/loupe.svg" class="w-5" />
          </button>
        </div>
        <!-- Navbar -->
        <div
          class="
            hidden
            ml-5
            mt-3
            border-t border-secondary border-opacity-20
            justify-end
            md:flex
            md:row-start-2
            md:col-start-2 md:col-span-5
            lg:col-start-3 lg:col-span-7
            xl:col-start-3 xl:col-span-10
          "
        >
          <nav class="flex overflow-x-auto mr-6">
            <div
              class="
                flex
                justify-between
                items-center
                whitespace-nowrap
                gap-x-7
              "
            >
              <a href="#" class="text-tertiary hover:text-opacity-70 transition"
                >Вина</a
              >
              <a href="#" class="text-tertiary hover:text-opacity-70 transition"
                >Шампанское</a
              >
              <a href="#" class="text-tertiary hover:text-opacity-70 transition"
                >Коньяк</a
              >
              <a href="#" class="text-tertiary hover:text-opacity-70 transition"
                >Виски</a
              >
              <a href="#" class="text-tertiary hover:text-opacity-70 transition"
                >Крепкие напитки</a
              >
              <a href="#" class="text-tertiary hover:text-opacity-70 transition"
                >Безалкогольные</a
              >
              <a
                href="#"
                class="
                  text-tertiary
                  inline-flex
                  hover:text-opacity-70
                  transition
                "
                ><img src="img/icons/fire.svg" class="w-5 mr-2" /> Акции и
                скидки</a
              >
            </div>
          </nav>
          <a href="#" class="text-tertiary hidden md:flex items-center">
            <img src="img/icons/noun_Smartphone_953658.svg" class="w-6 mr-2" />
            <span
              class="
                border-b-2 border-dashed border-secondary
                truncate
                w-24
                lg:w-auto
              "
              >+ 38 (066) 943-32-23</span
            >
            <img src="img/icons/arrow-down-white.svg" class="w-4 ml-2" />
          </a>
        </div>
      </div>
    </header>
    <main>
      <!-- Banner -->
      <div class="relative">
        <div class="h-full bg-quaternary">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-hidden">
              <div class="absolute inset-0">
                <img
                  class="h-full w-full object-cover"
                  src="img/banner-hero.png"
                  alt="wine not banner"
                />
              </div>
              <div
                class="
                  relative
                  w-2/3
                  md:w-3/5
                  float-right
                  px-4
                  py-16
                  sm:px-6
                  sm:py-24
                  lg:py-44
                  lg:px-8
                "
              >
                <h1
                  class="
                    text-center text-4xl
                    font-serif
                    tracking-tight
                    sm:text-5xl
                    lg:text-6xl
                  "
                >
                  <span class="block text-primary text-sm">...</span>
                  <span class="block text-secondary">Заголовок баннера</span>
                </h1>
                <p
                  class="
                    mt-6
                    max-w-lg
                    mx-auto
                    font-light
                    text-base text-center text-primary
                    sm:max-w-3xl
                  "
                >
                  Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure
                  qui lorem cupidatat commodo. Elit sunt amet fugiat veniam
                  occaecat fugiat aliqua.
                </p>
                <div
                  class="
                    mt-10
                    max-w-sm
                    mx-auto
                    sm:max-w-none
                    sm:flex
                    sm:justify-center
                  "
                >
                  <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid">
                    <a
                      href="#"
                      class="
                        flex
                        items-center
                        justify-center
                        px-4
                        py-3
                        border border-transparent
                        text-base
                        font-medium
                        shadow-sm
                        text-tertiary
                        bg-secondary
                        hover:bg-tertiary
                        hover:text-primary
                        sm:px-8
                        cursor-pointer
                      "
                    >
                      Каталог
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Feature card -->
      <div
        class="
          flex flex-nowrap
          overflow-x-auto
          max-w-7xl
          w-full
          mx-auto
          p-4
          gap-x-3
        "
      >
        <div class="flex-auto">
          <a
            href="#"
            class="
              w-80
              lg:w-full
              h-72
              flex
              justify-around
              items-center
              bg-quaternary
              border-4 border-secondary
              hover:bg-white
              hover:shadow-lg
              transition
              cursor-pointer
            "
          >
            <h4 class="font-medium text-lg capitalize inline-flex">Вино <img src="img/icons/bottle-l.svg" class="pl-10" /></h4>
            <img src="img/icons/bottle-wine.svg" alt="wine" class="w-20 h-72" />
          </a>
        </div>
        <div class="flex-auto">
          <a
            href="#"
            class="
              w-80
              lg:w-full
              h-72
              flex
              justify-around
              items-center
              bg-quaternary
              border-4 border-secondary
              hover:bg-white
              hover:shadow-lg
              transition
              cursor-pointer
            "
          >
            <h4 class="font-medium text-lg capitalize inline-flex">Виски <img src="img/icons/bottle-l.svg" class="pl-10" /></h4>
            <img
              src="img/icons/bottle-whiskey.svg"
              alt="wine"
              class="w-20 h-72"
            />
          </a>
        </div>
        <div class="flex-auto">
          <a
            href="#"
            class="
              w-80
              lg:w-full
              h-72
              flex
              justify-around
              items-center
              bg-quaternary
              border-4 border-secondary
              hover:bg-white
              hover:shadow-lg
              transition
              cursor-pointer
            "
          >
            <h4 class="font-medium text-lg capitalize inline-flex">Водка <img src="img/icons/bottle-l.svg" class="pl-10" /></h4>
            <img
              src="img/icons/bottle-vodka.svg"
              alt="wine"
              class="w-20 h-72"
            />
          </a>
        </div>
      </div>
      <!-- Content -->
      <div class="max-w-7xl w-full mx-auto p-4">
        <div class="flex justify-center my-6">
          <img src="img/icons/bottle-l.svg" class="mr-10" />
          <h2 class="text-tertiary font-semibold text-2xl text-center">
            Топ продаж
          </h2>
          <img src="img/icons/bottle-r.svg" class="ml-10" />
        </div>
        <!-- TODO: add tabs -->
        <div class="max-w-7xl m-auto mx-auto grid grid-cols-2 gap-0 md:gap-5 md:grid-cols-9 lg:px-40">
          <!-- <div class="lg:col-span-1 lg:row-span-full lg:col-start-1 border-quaternary border-opacity-50 p-4"></div>
          <div class="lg:col-span-1 lg:row-span-full lg:col-start-11 border-quaternary border-opacity-50 p-4"></div> -->

          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
              <div class="absolute top-0 left-0 bg-opacity-10 flex items-center justify-center gap-2">
                <span class="bg-blue-500 text-tertiary text-sm py-1 px-3">Хит</span>
              </div>
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light pr-2">Цена:</span>
                <span class="text-secondary font-bold"> 1500 &#x20ac;</span>
                <span class="text-gray-400 line-through pl-2">2000 &#x20ac;</span>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
               <div class="absolute top-0 left-0 bg-opacity-10 flex items-center justify-center gap-2">
                <span class="bg-blue-500 text-tertiary text-sm py-1 px-3">Хит</span>
              </div>
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
               <div class="absolute top-0 left-0 bg-opacity-10 flex items-center justify-center gap-2">
                <span class="bg-blue-500 text-tertiary text-sm py-1 px-3">Хит</span>
              </div>
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="max-w-7xl w-full mx-auto p-4">
        <div class="flex justify-center my-6">
          <img src="img/icons/bottle-l.svg" class="mr-10" />
          <h2 class="text-tertiary font-semibold text-2xl text-center">
            Все товары
          </h2>
          <img src="img/icons/bottle-r.svg" class="ml-10" />
        </div>
        <!-- TODO: add tabs -->
        <div class="max-w-7xl m-auto mx-auto grid grid-cols-2 gap-0 md:gap-5 md:grid-cols-9 lg:px-40">
          <!-- <div class="lg:col-span-1 lg:row-span-full lg:col-start-1 border-quaternary border-opacity-50 p-4"></div>
          <div class="lg:col-span-1 lg:row-span-full lg:col-start-11 border-quaternary border-opacity-50 p-4"></div> -->

          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
              <div class="absolute top-0 left-0 bg-opacity-10 flex items-center justify-center gap-2">
                <span class="bg-green-500 text-tertiary text-sm py-1 px-3">Новое</span>
              </div>
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
              <div class="absolute top-0 left-0 bg-opacity-10 flex items-center justify-center gap-2">
                <span class="bg-green-500 text-tertiary text-sm py-1 px-3">Новое</span>
              </div>
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
               <div class="absolute top-0 left-0 bg-opacity-10 flex items-center justify-center gap-2">
                <span class="bg-green-500 text-tertiary text-sm py-1 px-3">Новое</span>
              </div>
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
              <div class="absolute top-0 left-0 bg-opacity-10 flex items-center justify-center gap-2">
                <span class="bg-red-500 text-tertiary text-sm py-1 px-3">Акция</span>
              </div>
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
          <div class="overflow-hidden border border-quaternary border-opacity-50 p-4 max-w-sm col-span-1 md:col-span-3">
            <div class="relative pt-5">
              <img src="img/product/3.png" alt="" class="w-24 md:w-8/12 m-auto" />
              <div class="absolute top-0 right-0 bg-opacity-10 flex items-center justify-center gap-2">
                <a href="#" class="flex items-center justify-center">
                  <img src="img/icons/heart.svg" alt="" class="w-6 md:w-7" />
                </a>
              </div>
            </div>

            <div class="pt-5">
              <div class="hidden md:block text-center">
                <span class="bg-secondary py-1 px-3">750 мл.</span>
                <span class="bg-secondary py-1 px-3">Красное</span>
                <span class="bg-secondary py-1 px-3">3 года</span>
              </div>
              <a href="#">
                <p class="text-center text-lg text-tertiary py-3">Rerum eos nesciunt suscipit enim libero corrupti.</p>
              </a>
              <div class="hidden md:flex items-center justify-center text-center m-3 text-tertiary whitespace-normal">
                <span class="text-gray-400 font-light">Цена:</span>
                <span class="text-secondary"> 1500 &#x20ac;</span>
                <!-- <span class="text-gray-400 line-through">2000 &#x20ac;</span> -->
              </div>
              <div class="flex items-center justify-between">
                <span class="text-secondary font-bold md:hidden"> 1500 &#x20ac;</span>
                <button class="hidden md:block w-6/12 py-2 px-4 bg-secondary text-tertiary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75">Открыть</button>
                <button class="w-7/12 md:w-6/12 py-2 px-4 bg-primary text-secondary border border-secondary font-semibold shadow-md hover:bg-opacity-80 focus:ring-opacity-75 text-sm">Купить</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer>
      <div
        class="
          max-w-7xl
          w-full
          mx-auto
          p-4
          pl-4
          mt-5
          grid grid-cols-1
          md:grid-cols-12
          md:border-t border-quaternary border-opacity-20
          text-gray-500 text-base
          transition
        "
      >
        <div class="md:col-span-3 md:border-r md:border-quaternary md:border-opacity-20 mr-20">
          <h3 class="text-tertiary text-lg font-bold pb-2">Каталог</h3>
          <ul>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#" >Вина</a></li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Шампанское</a></li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Коньк</li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Виски</a></li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Крепкие напитки</a></li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Безалкогольные</a></li>
          </ul>
        </div>
        <div class="md:col-span-2">
          <h3 class="text-tertiary text-lg font-bold pb-2">Покупателю</h3>
          <ul>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Доставка и оплата</a></li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Гарантия и возврат</a></li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Вопросы и ответы</a></li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Контакты</a></li>
          </ul>
        </div>
        <div class="md:col-span-2">
          <h3 class="text-tertiary text-lg font-bold pb-2">Компания</h3>
          <ul>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">О магазине</a></li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Новости</a></li>
            <li class="hover:text-gray-200 pb-2 transition"><a href="#">Сотрудничество</a></li>
          </ul>
        </div>
        <div class="hidden md:inline-block md:col-span-2">
          <h3 class="text-tertiary text-lg font-bold pb-2">График работы</h3>
          <ul>
            <li class="pb-2">Пн-Пт - 09:00 до 18:00</li>
            <li class="pb-2">Сб - 09:00 до 16:00</li>
            <li class="pb-2">Вс - выходной</li>
          </ul>
        </div>
        <div class="md:col-span-3 flex md:justify-end md:border-l md:border-quaternary md:border-opacity-20 md:ml-10">
          <ul>
            <li class="text-tertiary text-xl pb-4"><span>+ 38 (066) 943-32-23</span></li>
            <li class="text-tertiary text-xl pb-4"><span>+ 38 (066) 943-32-23</span></li>
            <li class="text-tertiary text-xl pb-4"><span>+ 38 (066) 943-32-23</span></li>
          </ul>
        </div>
        <div class="py-4 mt-4 md:col-span-full md:border-t border-quaternary border-opacity-20">
          <p class="w-1/2 font-light text-xs py-2">© BOCOMER 2021. Все права защищены. E irure dolor in reprehenderit in voluptate velit esse cillum dolore ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum do sse cillum dolore ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum do</p>
        </div>
      </div>
    </footer>
  </body>
</html>
