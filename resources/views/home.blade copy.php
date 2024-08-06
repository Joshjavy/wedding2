@extends('layouts.app')

@section('title', 'Wedding')

@section('content')
    <div class="sm:w-full  md:w-full lg:w-3/6 xl:w-6/12			 lg:m-auto" style="max-width: 951px!important;">
        <div class="">
            {{-- header --}}
            <img class="" src="{{ asset('imgs/elementos/Fondo_Anni_invite_header.png') }}" />
            <div style="background: url({{ asset('imgs/elementos/Fondo_Anni_invite_Bodylg.png') }})" class="item"
                style="max-width: 951px!important;">
                <img src="{{ asset('imgs/emblema/Emblema_ANNI.png') }}" class=" m-auto  relative -top-28 sm:-top-24 md:-top-28 lg:-top-28 xl:-top-32 2xl:-top-40 emblema" />

                <div class="text-center px-5">
                    <p class="SOUTH_CATALONIA">
                        We’re getting married<br />
                        and look forward to celebrating our wedding with you
                    </p>
                </div>
                <div class=" text-center  py-16 fade">
                    <p class="titulo text-5xl">Ceremony</p>
                </div>

                <div class="text-center px-5 fade">
                    <p>
                        <span class=""> Miacatlán, Morelos, México.<br /><br /></span>
                        The ceremony and the reception<br />
                        will be at the same location.
                    </p>

                    <a href="https://maps.app.goo.gl/izxEKRiFgxiDFkWn8" target="_blanck"
                        class="Botones inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium  ">mapa</a>

                </div>

                <div class=" text-center py-10 fade">
                    <p class="titulo text-5xl">Dress Code </p>
                </div>

                <div class="text-center py-4 px-5 fade">
                    <p>
                        We expect a hot day in April, the average low/high temperatures<br />
                        during this season are 20/35 C.<br /><br />

                        Please dress appropriately for the weather. <br /><br />

                        Should you choose to wear heels, we recommend the ones<br />
                        as the grass may be uneven.</p>
                </div>


                <div class=" text-center py-10 fade">
                    <p class="titulo text-5xl">Gifts </p>
                </div>

                <div class="text-center py-4 px-5 fade">
                    <p>
                        Many of you will travel long distances
                        to <br />share our wedding day with us,
                        so the best <br />gift you can give us is your presence.</p>
                </div>


                <div class="flex align-items-center justify-content-center py-4 w-1/2 m-auto fade">
                    <img src="{{ asset('imgs/elementos/Detalle-anni.png') }}" class="w-4/12	 m-auto" />
                </div>

                <div class=" text-center py-10 fade">
                    <p class="titulo text-5xl">Getting there </p>
                </div>

                <div class="text-center py-4 px-5 fade">
                    <p>
                        Mexico City International Airport (MEX); officially Aeropuerto<br />
                        Internacional Benito Juárez is the primary international airport<br />
                        serving Greater Mexico City.<br /><br />

                        This airport has non-stop flights to many cities in Europe and the US.<br /><br />

                        Note that there are other satellite international airports in Mexico City,<br />
                        however we do not recommend travelling to those</p>
                </div>

                <div class=" text-center py-10 fade">
                    <p class="titulo text-5xl">Where to stay </p>
                </div>

                <div class="px-5  py-4 fade">
                    <p class="">
                        <span class="font-bold	text-left">Mexico City</span><br />

                        If you are arriving early in Mexico City, we recommend staying in Polanco area.<br />This is a very
                        popular central location with many accommodation,dining and shopping options. <br />
                        A shuttle bus will be organised to transfer international guests from Mexico City to the wedding
                        venue area. <br /> <br />The bus will depart on the 10 April 2025 from Polanco to the Santa Fe Golf
                        Club estate.<br /> See below for accommodation options.<br /><br />
                        We strongly recommend that you join the bus and travel to other guests as the wedding<br /> venue is
                        2 hours away and travel by cab or other public transport will be very hard to predict.
                    </p>

                    <p class="mt-10 pb-3 fade">
                        <span class="font-bold	text-left">Wedding venue</span><br />
                        We strongly recommend that you stay at the ‘Santa Fe Golf Club’ in Xochitepec, Morelos.<br /> This
                        estate is 20 mins from the wedding venue and a shuttle will be organised to transfer you to and from
                        on wedding day.
                        <br /><br />
                        Some of you may travel alone or with a +1 and renting an entire house may not cost effective. If
                        this is your case, please let us know and we will try to match you with other guests to keep the
                        cost affordable.

                        A few examples of homes available to rent within the estate:
                    </p>
                    <a href="https://www.airbnb.com.au/rooms/16995395?viralityEntryPoint=1&unique_share_id=76204413-2F92-468D-9841-763619B23E64&slcid=9a645dc003ff4fb4aecd09db492c225b&s=76&feature=share&adults=1&channel=native&slug=r6ZmgTeI&source_impression_id=p3_1721122237_P3xpUGqjj4VS9rRp"
                        target="_blanck"
                        class="Botones inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium">Example
                        1</a>
                    <a href="https://www.airbnb.com.au/rooms/39089535?viralityEntryPoint=1&unique_share_id=5A25BA73-739E-4B8A-946C-F79751E5BF36&slcid=bb731e9ea565490db737c350073c9860&s=76&feature=share&adults=1&channel=native&slug=sNC4pQDc&source_impression_id=p3_1721122257_P39gmHuJ9sH_saio"
                        target="_blanck"
                        class="Botones inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium  ">Example
                        2</a>
                    <a href="https://www.airbnb.com.au/rooms/37090533?viralityEntryPoint=1&unique_share_id=287F6169-2155-4D9D-9D15-D4529D48D9F8&slcid=927f8fa7042d496d88a9b6514685258f&s=76&feature=share&adults=1&channel=native&slug=VRxjTxwg&source_impression_id=p3_1721122260_P39gmIWp8nPydcwV"
                        target="_blanck"
                        class="Botones inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium  ">Example
                        3</a>
                </div>

                <div class=" text-center py-10 fade">
                    <p class="titulo text-5xl">What else can I do whilst in Mexico? </p>
                </div>

                <div class="py-4 px-5 fade">
                    <p>
                        After travel for many hours, some of you may want to explore Mexico before or after the wedding.
                        There are countless options available depending on your interests, style of travel and budget,
                        however popular places include the Yucatán peninsula (Cancun, Playa del Carmen, Tulum, etc.) the
                        Pacific (Cabo San Lucas) or other culturally significant areas such as Oaxaca.<br /><br />
                        Regardless of what you may want to see in Mexico, we are happy to suggest safe travel options in
                        Mexico. Please contact Anni and Marco.</p>
                </div>
                <div class="flex align-items-center justify-content-center py-4 w-1/2 m-auto fade">
                    <img src="{{ asset('imgs/elementos/Detalle-anni.png') }}" class="w-4/12	 m-auto" />
                </div>
                <div class=" text-center py-10 fade">
                    <p class="titulo text-5xl">Confirmación de Asistencia </p>
                </div>

                <div class="py-4 px-5 fade">


                    <form class="max-w-md mx-auto" action="{{ route('confirmar.asistencia') }}" method="POST"
                        autocomplete="off">
                        @csrf
                        <div class="relative z-0 w-full mb-5 group">
                            <label class="color">All fields are required, minimun 2 characters!</label><br />


                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="Firstname" class="">First name</label><br />
                            <input type="text" name="Firstname" id="Firstname"
                                class="pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />

                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <label for="Surname" class="">Surname</label><br />
                            <input type="text" name="Surname" id="Surname"
                                class="pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <label for="phone" class="">Mobile number</label><br />
                            <input type="text" name="phone" id="phone"
                                class="pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="allergies" class="">Dietary restrictions or allergies</label><br />
                            <input type="text" name="allergies" id="allergies"
                                class=" pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <label for="rtransport" class="">Do you require transport from Mexico City to the wedding
                                area (2 hrs away by car)?</label><br />
                            <select id='rtransport' name="rtransport"
                                class=" w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option selected value=""></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Not sure">Not sure</option>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="dance" class="">What song is guaranteed to get you up on the dance
                                floor?</label><br />
                            <input type="text" name="dance" id="dance"
                                class=" pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                        </div>




                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">CONFIRM</button>
                    </form>


                </div>


            </div>

            <div class="">
                {{-- header --}}
                <img src="{{ asset('imgs/elementos/Fondo_Anni_invite_footer.png') }}" />
            </div>
        </div>



    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('input').attr('autocomplete', 'off');
        });

        $(document).on("scroll", function() {
            var pageTop = $(document).scrollTop()
            var pageBottom = pageTop + $(window).height() - 40
            var tags = $(".fade")

            for (var i = 0; i < tags.length; i++) {
                var tag = tags[i]

                if ($(tag).position().top < pageBottom) {
                    $(tag).addClass("visible")
                } else {
                    $(tag).removeClass("visible")
                }
            }
        });
    </script>
@endsection
