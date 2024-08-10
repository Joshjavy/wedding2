@extends('layouts.app')

@section('title', 'Wedding - Anni & Marco')

@section('content')
    <img src="{{ asset('imgs/Desktop/FONDO_desck_Anni_invite_03.jpg') }}"
        class="imagebg fixed sm:w-full  md:w-full lg:h-screen	xl:h-screen 2xl:h-screen" />
    <img src="{{ asset('imgs/elementos/fondo_Anni_invite_03.jpg') }}"
        class="imagemb fixed sm:w-full  md:w-full lg:h-screen	xl:h-screen 2xl:h-screen  hidden" />

    <div class="pagecontent relative sm:w-full">

        <div class="flex w-full justify-end">
            {{-- <div class="w-1/2 flex  justify-self-start " >
                <img src="{{ asset('imgs/Desktop/Recurso_desck_5_8_2.png') }}" class="hojastopds relative hidden divhojasdesk" />
            </div> --}}

             <div class="divhojastop">
                <img src="{{ asset('imgs/Mobile/Recurso_mb_6_8_2.png') }}" class="divhojasmb" />
            </div>
        </div>

        <div class="info pt-10 absolute top-3 z-50 m-auto " >
            <div>
                <div class="flex justify-center px-5 py-16">
                    <img src="{{ asset('imgs/emblema/Emblema_ANNI.png') }}" class="emblema m-auto" />
                </div>

            <div class="text-center px-5 py-16">
                <p class="SOUTH_CATALONIA">
                    We’re getting married and look forward<br />
                    to celebrating with you!
                </p>
            </div>
            <div class=" text-center  py-16 ">
                <p class="titulo text-5xl">Ceremony</p>
            </div>

            <div class="text-center px-5 ">
                <p>
                    <span class=""> Miacatlán, Morelos, México.<br /><br /></span>
                    The ceremony and the reception<br />
                    will be at the same location.
                </p>

                <a href="https://maps.app.goo.gl/izxEKRiFgxiDFkWn8" target="_blanck"
                    class="Botones inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium  ">map</a>

            </div>

            <div class=" text-center py-11 ">
                <p class="titulo text-5xl">Dress Code </p>
            </div>

            <div class="text-center py-4 px-5 ">
                <p>
                    We expect a hot day in April, the average low/high temperatures<br />
                    during this season are 20/35 C.<br /><br />

                    Please dress appropriately for the weather. <br /><br />

                    If you choose to wear heels, we recommend chunky heels<br />
                    as there will be uneven areas and grass.</p>
            </div>

            <div class=" text-center py-11 ">
                <p class="titulo text-5xl">Gifts </p>
            </div>

            <div class="text-center py-4 px-5 ">
                <p>
                    Many of you will travel long distances
                    to <br />share our wedding day with us,
                    so the best <br />gift you can give us is your presence.</p>
            </div>



            <div class="flex align-items-center justify-content-center py-4 w-1/2 m-auto ">
                <img src="{{ asset('imgs/elementos/Detalle-anni.png') }}" class="w-6/12	 m-auto" />
            </div>

            <div class=" text-center py-10 ">
                <p class="titulo text-5xl">Getting there </p>
            </div>

            <div class="text-center py-4 px-5 ">
                <p>
                    Mexico City International Airport (MEX); officially Aeropuerto<br />
                    Internacional Benito Juárez is the primary international airport<br />
                    serving Greater Mexico City.<br /><br />

                    This airport has non-stop flights to many cities in Europe and the US.<br /><br />

                    Please note that there are other satellite international airports in Mexico City,<br />
                    but we do not recommend flying into them.</p>
            </div>

            <div class=" text-center py-10 ">
                <p class="titulo text-4xl">Where to stay </p>
            </div>

            <div class="px-5  py-4 ">
                <p class="">
                    <span class="font-bold	text-left">Mexico City</span><br />

                    In Mexico City, we suggest staying in the Polanco area. This is a popular central suburb with plenty of accommodation options, restaurants, and shopping.<br><br>
                    A shuttle bus will be arranged to transport international guests from Mexico City to the wedding venue.<br>
                    The bus will depart on the morning of April 10, 2025 from Polanco to the Santa Fe Golf Club Estate.<br>
                    Please see below for accommodation options.<br>
                    We recommend that you join the bus and travel with other guests as the wedding venue is 2 hours away and getting to the destination by taxi or public transportation is tricky.

                </p>

                <p class="mt-10 pb-3 ">
                    <span class="font-bold	text-left">Wedding venue</span><br />
                    We recommend that you stay at the 'Santa Fe Golf Club' in Xochitepec, Morelos. This estate is 20 minutes from the wedding venue and a shuttle will be arranged to transport you to and from the wedding venue. Some of you may be traveling alone or with a +1 and renting an entire house may not be cost effective. If this is the case for you, please let us know and we will try to match you with other guests to keep the cost affordable.<br><br>

                    Some examples of available houses to rent within the property:
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



            <div class=" text-center py-10 ">
                <p class="titulo text-5xl">What else can I do whilst in Mexico? </p>
            </div>

            <div class="py-4 px-5 ">
                <p>
                    After travel for many hours, some of you may want to explore Mexico before or after the wedding.
                    There are countless options available depending on your interests, style of travel and budget,
                    however popular places include the Yucatán peninsula (Cancun, Playa del Carmen, Tulum, etc.) the
                    Pacific (Cabo San Lucas) or other culturally significant areas such as Oaxaca.<br /><br />
                    Regardless of what you may want to see in Mexico, we are happy to suggest safe travel options in
                    Mexico. Please contact Anni and Marco.</p>
            </div>

            <div class="flex align-items-center justify-content-center py-4 w-1/2 m-auto ">
                <img src="{{ asset('imgs/elementos/Detalle-anni.png') }}" class="w-6/12	 m-auto" />
            </div>
            <div class=" text-center py-10 ">
                <p class="titulo text-5xl">RSVP your Attendance </p>
                <p class="pt-16">
                    Please RSVP by 30 September 2024
                </p>
            </div>



            <div class="py-4 px-5 ">
                

                <form class="max-w-md mx-auto" name="register" action="{{ route('confirmar.asistencia') }}" method="POST"
                    autocomplete="off">
                    @csrf
                    <div class="relative z-0 w-full mb-5 group">
                        <label class="color">All fields are required, minimum 2 characters.</label><br />


                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="Firstname" class="">Name and surname</label><br />
                        <input type="text" name="Firstname" id="Firstname"
                            class="pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />

                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <label for="rsv" class="">If you would like to RSVP on behalf of other guests joining you, please enter their names below.</label><br />

                        <input type="text" name="RSVPu" id="RSVPu"
                            class="pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "  />

                            <input type="text" name="RSVPd" id="RSVPd"
                            class="pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "  />

                            <input type="text" name="RSVPt" id="RSVPt"
                            class="pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "  />

                            <input type="text" name="RSVPc" id="RSVPc"
                            class="pl-1 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "  />
                        
                        
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
                        <label for="rtransport" class="">Do you require transport from Mexico City to the
                            wedding
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
                    <button type="submit" id="procesar"
                       style="background-color: #95977F;" class="text-white bg-[#95977F]  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">CONFIRM</button>
                </form>
            </div>
            <!--Fin de contenido !-->
            </div>
            {{-- <img src="{{ asset('imgs/Desktop/Recursodesck6_8.png') }}" class="relative z-50 w-5/12	 hojasbtDS" /> --}}
            
            <div class="divhojasbtn" style="position: relative; z-index:99; ">
                <img src="{{ asset('imgs/Mobile/Recurso_mb_5_8_2.png') }}" class="hojasbtbm w-3/6" />
            </div>
        </div>
        
    </div>


@endsection
@section('script')
    <script>
        
        $(document).ready(function() {
            $('input').attr('autocomplete', 'off');
        });
    </script>
@endsection
