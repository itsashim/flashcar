@extends('front.layout.front')

@section('styles')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .billing-form,
        .Rental-form,
        .Payment-form,
        .Confirmation_info,
        .Rental_summary {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 1rem;
            width: 100%;
        }




        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }



        .form_group {
            margin: 1rem;
        }

            .sumamry_car{
            width: 100%;
            max-width: 237.219px;
            height: 151.417px;
            border-radius: 10.094px;
            overflow: hidden;
            }
            .sumamry_car div{
              display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('{{asset("public/new-images/bg.svg")}}');
            background-size: 100%;

            }
            .sumamry_car img{
              width: 80%;
            }
            .light_yellow {
                background-color: #d3b918;
            }



    </style>

    <!-- Terms and condition modal Start -->
    <style>


    .overlay{
        position: fixed;
        width: 100%;
        background: #0006;
        color: #555;
        top: 0%;
        left: 50%;
        transform: translate(-50%, 0);
        height: 100vh;
        padding: 4rem 0;
        padding-top: 2rem;
        z-index: 9999;
    }


    .condtion_modal{

                width: min(100% - 3rem , 100ch);
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                margin: 0 auto;
                background-color: white;
                height: 90vh;
                overflow-y: scroll;

            }

j
    *{
              font-family: "Inter", sans-serif !important;
    }

      .tnc{
        width: min(100% - 3rem, 65ch);
        margin: 0 auto;

      }

      .tnc h1{
        font-size: 1.4rem;
        font-weight: 600;
        font-style: italic;
        margin-top: 1rem;
      }
      .tnc h2{
        font-size: 1.4rem;
        font-weight: 600;
        margin-top: 1rem;
      }
      .tnc span{
        font-style: italic;
        font-size: 1.2rem;
        font-weight: bold;
      }
    </style>
    <!-- Terms and condtion end  -->

@endsection

@section('content')

    <div class="p-2">
       <div class="row mx-0">
        <div class="col-md-12 col-xl-6 col-12">
            <form class="info_form">

                <div id="authBillDiv" @if(!auth()->user()) class="d-none" @endif >
                    @if(auth()->user())
                    <div class="billing-form">
                        <h4>Billing Info</h4>
                        <p>Please Enter you billing info</p>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" value="{{auth()->user()->name}}" placeholder="Enter your name" readonly />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="phonenumber">Phone Number</label>
                                    <input type="text" id="phonenumber" name="phonenumber" value="{{auth()->user()->phone_no}}"
                                        placeholder="Enter your phone number" readonly />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address" value="{{auth()->user()->address}}" placeholder="Enter your address" readonly />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="Rental-form">
                        <h4>Rental Info</h4>
                        <p>Please select your rental date</p>

                        <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Pick-Up
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="name">Location</label>
                                    <input id="pickup_location" type="text" name="pickup_location" class="form-control" required/>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="phonenumber">Date</label>
                                    <input id="pickup_date" type="date" name="pickup_date" class="form-control" value="{{ $startDate }}" readonly />
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="form-group form_group col-lg-6 col-md-6 col-sm-12">
                                <label for="address">Time</label>
                                <input id="pickup_time" type="time" name="pickup_time" class="form-control" required/>
                            </div>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Drop-Off
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="name">Location</label>
                                    <input id="drop_location" type="text" name="drop_location" class="form-control" required/>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="phonenumber">Date</label>
                                    <input id="drop_date" type="date" name="drop_date" class="form-control" value="{{ $endDate }}"  readonly/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="address">Time</label>
                                    <input id="drop_time" type="time" name="drop_time" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="Additional-Information-form" style="background-color: #ffffff;
                    border-radius: 10px;
                    padding: 20px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    margin-top: 1rem;
                    width: 100%;">
                        <h4>Additional Information</h4>
                        <div class="form-check">
                            <label for="flight_number">Flight Number</label>
                            <input class="form-control" type="text" name="flight_number" id="flight_number" placeholder="Enter your flight number" />
                        </div>
                        <div class="form-check">
                            <label for="hotel_name" class="form-check-label">Hotel Name</label>
                            <input class="form-control" type="text" name="hotel_name" id="hotel_name" placeholder="Enter your hotel name" />
                        </div>
                        <div class="form-check">
                            <label for="second_driver_info" class="form-check-label">Second Driver</label>
                            <input class="form-control" type="text" name="second_driver_info" id="second_driver_info" placeholder="Enter your second driver" />
                        </div>
                        <div class="form-check">
                            <label for="special_request" class="form-check-label">Special Request</label>
                            <input class="form-control" type="text" name="special_request" id="special_request" placeholder="Enter your third driver" />
                        </div>
                    </div>

                    <div class="Payment-form">
                        <h4>Payment Info</h4>
                        <p>Please enter your paymnent info</p>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" value="credit_card"
                                id="flexRadioDefault2" checked />
                            <label class="form-check-label" for="flexRadioDefault2">
                                Credit Card
                            </label>
                        </div>

                        <div class="d-flex">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="name">Card Number</label>
                                    <input type="text" id="card_number" name="name" placeholder="Card number" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group form_group">
                                    <label for="expire_date">Expiration Date</label>
                                    <input type="date" id="expire_date" name="expire_date" />
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="form-group form_group">
                                <label for="address">Card Holder</label>
                                <input type="text" id="card_holder_address" name="address" placeholder="Card holder" />
                            </div>
                            <div class="form-group form_group">
                                <label for="cvc">CVC</label>
                                <input type="text" id="cvc" name="cvc" placeholder="CVC" />
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" value="paypal"
                                     />
                                     <!--{{-- id="flexRadioDefault1" --}}-->
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Paypal
                                </label>
                            </div>
                            <div>
                                <img src="{{asset('public/new-images/PayPal.png')}}" alt="paypal.logo" />
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" value="cash_on_delivery"
                                     />
                                     {{-- id="flexRadioDefault1" --}}
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Cash On Delivery
                                </label>
                            </div>
                            <div style="width: 125px">
                                <img style="width: 100%" src="{{asset('/public/new-images/cash-on-delivery.png')}}" alt="Cash on delivery" />
                            </div>
                        </div>
                    </div>

                    <div class="Confirmation_info">
                        <h4>Confirmation</h4>
                        <p>
                            We are getting to the end.Just few clicks and your rental is
                            ready!
                        </p>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree with sending an Marketing and newsletter emails.No
                                spam,promised!
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                               />
                            <label class="form-check-label" for="flexCheckChecked">
                                I agree with our terms and conditions and privacy policy.
                            </label>
                            <i class="fa-solid fa-circle-check hide agreed"></i>
                        </div>

                        <button class="btn_1 rentNow" role="button" >Rent Now</button>

                        <div class="other_txt mt-3">
                            <img class="my-2" src="{{asset('public/new-images/secure-icon.png')}}" alt="safe logo" />
                            <h4>All your data are safe.</h4>
                            <p>
                                We are using the most advanced security to provide you the best
                                experience ever.
                            </p>
                        </div>
                    </div>
                    @endif
                </div>

                <div id="loginDiv" class="billing-form @if(auth()->user()) d-none @endif" >
                    <h4>Login To Continue</h4>
                    <p>Or Signup first to continue by clicking here
                        <a href="{{ asset('register') }}" class="btn btn-primary">Sign Up</a>
                    </p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form_group">
                                <label for="name">Email</label>
                                <input class="form-control" type="email" id="authEmail" placeholder="Enter your name" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form_group">
                                <label for="phonenumber">Password</label>
                                <input class="form-control" type="password" id="authPassord" placeholder="Enter your phone number" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button id="loginNow" class="btn btn-primary" type="button">Login</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="col-md-12 col-xl-6 col-12">
            <div class="Rental_summary">
                <h3>Rental Summary</h3>
                <p>
                    Prices may change depending on the length of th rental and the price
                    of your rental car.
                </p>
                <div class="nissan d-flex justify-content-between gap-2 mb-2">
                    <div class="light_yellow sumamry_car ">
                      <div class="sumamry_car">
                          <img src=" {{ asset('public/'.$car->carGalleries[0]->image_path) }}" alt="{{ $car->name }}" />
                      </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h3>{{ $car->name }}</h3>
                        <img style="width:160px;" src="{{ asset('public/new-images/Review.png') }}" alt="review" />
                    </div>
                </div>

                <div class="rental_period d-flex justify-content-between">
                    <p>Rental Period</p>
                    <h6>
                        {{ $startDate }} - {{ $endDate }}
                    </h6>
                </div>
                <div class="rental_period d-flex justify-content-between">
                    <p>Duration Fee Type</p>
                    <h6>
                        {{ $durationType }}
                    </h6>
                </div>

                <div class="subtotal d-flex justify-content-between">
                    <p>Rental Fee </p>
                    @if($durationType == 'Day')
                    <h6>{{ session()->get('currency_symbol') }} {{ convertCurrency($car->daily_fee, 'USD', session('currency_symbol')) }} x {{ $diffInDays }} = {{ $subTotal }}</h6>
                    @elseif($durationType == "Week")
                    <h6>{{ session()->get('currency_symbol') }} {{ convertCurrency($car->weekly_fee, 'USD', session('currency_symbol'))/7 }} x {{ $diffInDays }} = {{ $subTotal }}</h6>
                    @elseif($durationType == "Month")
                    <h6>{{ session()->get('currency_symbol') }} {{ convertCurrency($car->monthly_fee, 'USD', session('currency_symbol'))/30 }} x {{ $diffInDays }} = {{ $subTotal }}</h6>
                    @endif
                </div>

                @if($noInsurance == true)
                <div class="subtotal d-flex justify-content-between">
                    <p>Insurance Fee</p>
                    <h6>{{ session()->get('currency_symbol') }} 0</h6>
                </div>
                <div class="subtotal d-flex justify-content-between">
                    <p>
                        <button id="includeInsurance" type="button" class="btn btn-sm btn-primary">Include Insurance</button>
                    </p>
                </div>
                @else
                <div class="subtotal d-flex justify-content-between">
                    <p>Insurance Fee</p>
                    <h6>{{ session()->get('currency_symbol') }} {{ convertCurrency($car->department->insurance_fee, 'USD', session('currency_symbol')) }}</h6>
                </div>
                <div class="subtotal d-flex justify-content-between">
                    <p>
                        <button id="noInsurance" type="button" class="btn btn-sm btn-primary">Free Insurance</button>
                    </p>
                </div>
                @endif

                <div class="total_rental d-flex justify-content-between">
                    <div>
                        <h4>Total Rental Price</h4>
                        <p>Overall price and includes rental discount</p>
                    </div>
                    <div class="rate">
                        <h2>{{ session()->get('currency_symbol') }} {{ $grandTotal }}</h2>
                    </div>
                </div>

                <div class="subtotal d-flex justify-content-between">
                    <p>Deposit Gurantee (Payable at Delivery)</p>
                    <h6>{{ session()->get('currency_symbol') }} {{ convertCurrency($car->department->deposit_guarantee, 'USD', session('currency_symbol')) }}</h6>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Terms and condtion Modal -->
    <div  class="overlay hide">
     <div class="condtion_modal">
    <section class="tnc bg-white py-5">
      <h1 class="text-center">Contrato de arrendamiento</h1>
      <span class="text-center  d-block">Número de contrato R65559</span>
      <h2 class="text-center">BIENVENIDO</h2>
      <p>
        Nuestro compromiso con el planeta es muy importante. Por eso, hemos
        dejado de imprimir los contratos y ahora lo reciclamos con tu correo
        electrónico Con esta acción reduciremos el uso de toneladas de papel al
        año. salvando nuestros valiosos árboles. Usar menos papel es una forma
        de evitar la propagación del virus.
      </p>
      <p>
        Contrato de arrendamiento de vehículos que celebran por una parte el
        arrendador “Arrendadora de autos comerciales Flash Car” representado en
        este acto por Jose Manuel Maldonado Alcantar y en contraparte el
        arrendatario C. RAMON ANTONIO HALE ZUÑIGA mismos que por medio del
        presente manifiestan su voluntad para obligarse de acuerdo a siguiente
        glosario, así como a las declaraciones y cláusulas que a continuación se
        describen:
      </p>
      <h2>GLOSARIO</h2>
      <ol>
        <li>
          Consumidor o Arrendatario. Persona física que obtiene en arrendamiento
          el uso y goce temporal del vehculo objeto de este contrato quien
          recibirá el nombre de arrendatario.
        </li>
        <li>
          Proveedor o Arrendador. Persona física o moral que ofrece en
          arrendamiento el uso y goce temporal de bienes muebles quien para los
          ejercicios de este contrato recibirá el nombre de arrendador.
        </li>
      </ol>
      <h2>DECLARACIONES</h2>
      <p>PRIMERA. DECLARA EL ARRENDADOR</p>
      <ol>
        <li>
          Ser persona física de nacionalidad mexicana, mayor de edad y sin
          impedimento legal para obligarse en términos del presente contrato.
        </li>
        <li>
          Que su principal ocupación es la renta de bienes inmuebles “autos”
        </li>
        <li>
          Que cuenta para el desempeño de dichas funciones con el personal
          necesario y medios de transporte para el cumplimiento del objeto del
          presente contrato.
        </li>
        <li>
          Que su Registro Federal de Contribuyentes corresponde al número:
          <strong>MAAM931105I31</strong>
          <p>
            Para efectos aplicativos al consumidor se proporciona la línea de
            contacto para cualquier asunto relacionado con este contrato el
            número telefónico: 5611285775 en horarios de atencin las 24 horas.
            los 365 días del año y/o en la dirección de correo electrónico
            <a href="mailto: flashcarental@gmail.com">flashcarental@gmail.com</a
            >, con domicilio en High Park torre 1, piso 7
          </p>
        </li>
        <li>
          Que cuenta con los recursos humanos. financieros y materiales para
          llevar a cabo las obligaciones emanadas de este acto en el que dentro
          de sus acciones se encuentran el servicio de arrendamiento de
          vehículos
        </li>
        <li>
          Que cuenta con las licencias y permisos requeridos por la ley para
          prestar el servicio correspondiente Para efectos del presente contrato
          Informó al comprador el monto total a pagar por la buena operación y
          que son aplicables para los efectos de este contrato como las
          restricciones en su caso, y cobro de garantía.
        </li>
      </ol>
      <h2>SEGUNDA DECLARA EL ARRENDATARIO:</h2>
      <ol>
        <li>
          Ser una persona física de nacionalidad mexicana, mayor de edad y sin
          impedimento legal para obligarse en términos del presente contrato,
          estando en común acuerdo las partes otorgan para el cumplimiento del
          presente contrato, las siguientes
        </li>
        <li>
          Que se identifica el C. RAMON ANTONIO HALE ZUÑIGA Que su Clave Única
          de Registro Público corresponde al número: HAZR670626HDFLXM09 Llamarse
          según lo anotado en el preludio de este contrato. Contar con la
          capacidad legal para cumplir con la consecuencias de este preludio
          contractual y que cuenta con identificación oficial del país de
          origen. INE 042810930 Con Número de licencia de conducir R9136047,
          Señalando como Domicilio para la entrega del vehículo arrendado en EL
          MIRADOR DE QUERETARO ORIE 5 EDI II DESEOS CASA 41 EL MIRADOR, C.P.
          76246 . y que se atiene en términos contractuales a las leyes
          aplicables para efectos aplicativos de la ley y justicia que rigen al
          emisor del presente contrato de arrendamiento objeto de este Número de
          Contrato R65559 en los términos y condiciones que se establecen en
          este documento, aplicable a las leyes que rigen el estado de Santiago
          de Querétaro.
        </li>
        <li>
          Que sus generales corresponden a las anotadas en el presente contrato.
        </li>
      </ol>

      <h2>CLÁUSULAS</h2>
      <p>
        PRIMERA. Consentimiento. Por medio del presente Número de Contrato
        R65559 , el arrendador se obliga a conceder el uso y goce temporal del
        vehículo, por lo que el arrendatario deberá pagar un precio cierto y
        determinado
      </p>
      <p>
        SEGUNDA Objeto. El objeto material de este Número de Contrato R65559 es
        el vehículo que se encuentra descrito en el Anexo de este contrato. por
        lo que las características, condiciones, refacciones y documentos
        generales del vehículo arrendado.
      </p>
      <p>
        TERCERA Condiciones del vehículo arrendado. El arrendatario recibe de
        conformidad el vehículo arrendado, el cual se encuentra en ptimas
        condiciones mecnicas y de carrocería, las cuales se mencionan en el
        inventario respectivo. Acordando que el vehículo se entregue con el
        kilometraje sellado, el uso y goce del vehículo se destinará meramente
        al fin pactado por los contratantes. en caso de que el uso y goce esté
        destinada anticipadamente al transporte en arrendamiento y exceptuando
        los vicios ocultos, el vehículo a su entera satisfacción por lo que
        obliga a pagar Nmero de Contrato R65559 , a precios del mercado el
        valor comercial del auto en caso de algún accidente o siniestro tanto
        como y durante el periodo de renta al momento de la entrega del mismo en
        la finalización del contrato, en caso que el seguro no cubra los daños
        que se determinen por negligencia del conductor.
      </p>
      <p>
        CUARTA. Lugar de entrega y recepción del vehículo. El arrendador deberá
        entregar el vehículo arrendado en el lugar acordado entre las partes
        señaladas surgiendo en efecto de penalización después de las 3 horas del
        término de lo establecido en el presente. El
      </p>
      <p>
        <strong>ARRENDATARIO</strong> se compromete a entregar el vehículo en
        las mismas condiciones en que lo recibió exceptuando el desgaste por el
        uso en el día y las horas señaladas para tal efecto y obligándose a
        entregar en vehículo al arrendador en los términos y condiciones
        establecidas entre ambas partes.
      </p>
      <p>
        QUINTA Plazo del arrendamiento, La vigencia de este Número de Contrato
        R65559 será la señalada en el apartado Anexos del presente documento, la
        cual no podrá ser prorrogada sino con el pleno consentimiento de ambas
        partes expresado en un nuevo contrato de arrendamiento
      </p>
      <p>
        SEXTA. Precio del arrendamiento. El arrendatario. por el uso y goce
        temporal del vehículo de acuerdo a la oferta y demanda señalada y
        mencionada en moneda nacional para el cobro de pago en moneda extranjera
        conforme a las leyes aplicables, la cual se encuentra enunciada en el
        apartado Anexos del presente contrato. El arrendatario se obliga a no
        exigir el cobro de ningún cargo que no esté considerado en el presente
        contrato.
      </p>
      <p>
        SÉPTIMA. Modalidades de pago. El arrendatario podrá pagar la renta del
        vehículo al contado en el domicilio del arrendador con tarjeta bancaria,
        transferencia electrónica o cualquier otra forma de pago que acuerden
        las partes. El precio total del arrendamiento tomando en cuenta los
        anexos por renta dia con cobertura amplia, de acuerdo a lo solicitado
        por el consumidor se encuentre en plena disposición de vehículo
        arrendado y hasta la fecha en que lo reciba el arrendador a su entera
        satisfacción (En caso de que la arrendataria hubiere contratado el
        arrendamiento del vehículo por kilómetros recorridos. estos se
        determinarán por la lectura del kilometraje. registrado en el
        dispositivo instalado de fábrica en el vehículo odómetro). estipulando
        las partes que sí durante el término del arrendamiento, sobreviene algún
        desperfecto o la rotura de los protectores de dicho sistema. por culpa o
        negligencia del arrendatario. La renta se calculará tomando en cuenta la
        tarifa de renta por día que se establece en el anexo de este contrato.
        durante el tiempo en que el vehículo esté en posesión del arrendatario
      </p>
      <p>
        OCTAVA Depósito en garantía. El arrendatario se obliga a entregar al
        arrendador la cantidad sealada en el anexo de este contrato como costo
        en garantía de cumplimiento de la obligación principal de pago. En
        consecuencia. El arrendador deberá expedir un recibo por dicha cantidad
        en que conste: el nombre o razón social de la misma: fecha e importe del
        costo y nombre de la persona que lo recibe. Este recibo servirá de
        comprobante de canje para que al término del contrato el arrendador
        entregue la cantidad depositada dentro de las 24 horas siguientes a la
        recepción del vehículo de conformidad en caso contrario dicho depósito
        se aplicará a solventar los daños que hubiere o a para las reposiciones
        de faltantes y la reparación de desperfectos, cuando hayan sido
        debidamente acreditados por el arrendador, en la inteligencia que la
        arrendadora podrá exigir, judicial o extrajudicialmente, el pago de una
        cantidad adicional si el depósito fuere insuficiente para cubrir la
        reposición de faltantes y la reparación de saldos.
      </p>
      <p>
        NOVENA. Devolución del vehículo. El arrendatario se obliga a devolver al
        término de la vigencia del presente contrato el vehículo arrendado en
        las mismas condiciones en que lo recibió exceptuando el desgaste
        proveniente del uso normal del vehículo durante el arrendamiento las
        partes acuerdan en que la entrega del vehículo arrendado se lleve a cabo
        en la fecha y hora determinados en el apartado de anexos de este
        contrato en caso de que el vehículo no sea entregado en los Términos
        señalados. La arrendataria podrá entregarlo
      </p>
      <p>
        posteriormente, previo acuerdo de las partes, pagando la penalización
        correspondiente por retraso, el importe de la renta se calcula conforme
        a la renta acordada por el tiempo que tarde en entregar el vehículo en
        la fecha y hora determinados, si el retraso en la entrega del vehículo
        corresponde a la hora, El ARRENDATARIO sólo estará obligado a pagar la
        parte proporcional que corresponda.
      </p>
      <p>
        DÉCIMA. Prohibición al vehículo arrendador de salir de la República. Sin
        el previo consentimiento por escrito del arrendador. El vehículo
        arrendado no podrá salir de los límites de la república mexicana, en
        caso de incumplimiento a lo anteriormente señalado, el arrendador podrá
        dar por rescindido este contrato, recuperando el vehículo en las
        condiciones y estado en que se localice. Siendo responsable la
        arrendataria del pago de la pena convencional correspondiente, más de
        los gastos de recuperación del vehículo debidamente comprobados por el
        arrendador.
      </p>
      <p>
        DÉCIMA PRIMERA. Derechos y obligaciones de las partes. Los contratantes
        se reconocen como derechos exigibles, el cumplimiento de todas las
        disposiciones del presente contrato, normando su consentimiento por la
        observancia de las siguientes obligaciones:
      </p>
      <p>
        En el cumplimiento del presente Número de Contrato R65559 el arrendador
        se obliga
      </p>
      <ol>
        <li>
          Entregar el vehículo arrendador en óptimas condiciones de uso,
          considerando el combustible necesario para tal efecto: el día, hora y
          lugar acordado por las partes.
        </li>
        <li>
          Recibir el vehculo sin ninguna condicionante de pago por el límite de
          gasolina, en la inteligencia que el vehículo por ninguna circunstancia
          deberá ser entregado por el arrendatario con un nivel de gasolina
          menor a un cuarto de tanque.
        </li>
        <li>
          Al recibir el vehículo arrendado, señalando al arrendatario, de ser el
          caso, que el vehículo lo recibe a su entera satisfacción de lo
          contrario deberá manifestar en el acto de recepción los motivos de su
          proceder.
        </li>
        <li>
          Devolver al arrendatario en el tiempo estipulado por la retención de
          la garantía otorgada en depósito. Para los efectos de este contrato,
          son obligaciones del arrendatario:
          <ul>
            <li>
              ﻿ Pagar al arrendador la renta convenida del vehículo arrendado de
              manera puntual, sin requerimiento de pago y en las condiciones
              establecidas en el presente contrato.
            </li>
            <li>
              ﻿ Conducir, en todo momento el vehículo arrendado, bajo el amparo
              de la licencia respectiva, otorgada por las autoridades
              competentes; respetando los Reglamentos y Leyes de Tránsito en el
              ámbito Federal, Local o Municipal.
            </li>
            <li>
              ﻿ No manejar el vehículo en estado de ebriedad o bajo la
              influencia de drogas.
            </li>
            <li>
               No hacer uso del vehículo en forma lucrativa, ni subarrendarlo
            </li>
            <li>
              ﻿ No utilizar el vehículo arrendado para arrastrar remolques y no
              sobrecargarlo debiéndolo usar conforme a su resistencia y
              capacidad normal.
            </li>
            <li>
              ﻿ Conservar el vehiculo en el estado que lo recibio, exceptuando
              el desgaste normal de uso.
            </li>
            <li>
              ﻿ No conducir en el interior del vehículo con materias explosivas
              o inflamables, drogas o estupefacientes.
            </li>
            <li>
              ﻿ Pagar el importe de las sanciones que le fueran impuestas por
              violación a los Reglamentos de transito, aun despus de concluida
              la vigencia del contrato, si la infracción se origino durante el
              tiempo en que estuvo el vehiculo arrendando a disposición del
              arrendatario
            </li>
            <li>
              No utilizar el vehículo de manera diferente a lo señalado, para su
              efecto del presente: “Solo se le permite recorridos dentro del
              estado de Querétaro y 400km a su redonda.
            </li>
            <li>
              No subarrendar a terceros el vehículo objeto del presente contrato
              sin previo consentimiento del arrendador.
            </li>
          </ul>
        </li>
      </ol>
      <p>
        DÉCIMA SEGUNDA. Seguro del vehículo. El arrendador se obliga a ofrecer
        en arrendamiento vehículos que se encuentren asegurados con la compañía
        aseguradora que más convenga a sus intereses; en caso de siniestro el
        arrendatario ser responsable de solventar los gastos de operación del
        seguro (Deducible) en todo momento mientras se encuentre en disposición
        del vehículo. Corresponde al arrendador informar al arrendatario los
        términos y condiciones en que operará el seguro, sin embargo, durante el
        arrendamiento el arrendatario será responsable de los daños a terceros,
        así como de los daños a las personas o cosas que viajen dentro del
        vehículo, por lo que se obliga en este acto a informar al arrendador de
        cualquier Hecho anteriormente descrito. Considere el monto en garantía
        como pago de deducible en caso de algún incidente.
      </p>
      <p>
        DÉCIMA TERCERA. Caso fortuito o fuerza mayor. Las partes contratantes
        reconocen que no existirá responsabilidad de las partes si el presente
        contrato se incumple por caso fortuito o fuerza mayor; sin embargo, si
        durante la vigencia del presente documento se origina cualquier daño al
        vehículo por estos mismos supuestos, la arrendataria se obliga a dar
        aviso a la arrendadora y a las autoridades competentes el mismo día en
        que tenga conocimiento del hecho. El retardo en el aviso se considerará
        como incumplimiento de contrato, por lo que el arrendatario será
        responsable de indemnizar los daños que la arrendadora haya sufrido por
        causa de dicho daño
      </p>
      <p>
        DCIMA CUARTA. Objetos olvidados en el vehículo arrendado. Al momento de
        entregar el vehículo arrendado, será responsabilidad del arrendatario
        verificar que no existan objetos personales en el vehículo, en caso
        contrario la arrendadora no será responsable de los objetos dejados en
        el vehículo, ni del daño o demrito que pudiera ocasionarse al ser
        transportados dentro del mismo vehículo
      </p>
      <p>
        DÉCIMA QUINTA. Desperfectos mecánicos. En caso de ocurrir algún
        desperfecto mecánico o eléctrico al vehículo o la pérdida de las llaves
        del mismo, el arrendatario deberá comunicar ese hecho dentro de las dos
        primeras horas siguientes a la arrendadora, subsistiendo en todo caso
        las responsabilidades a cargo de la arrendataria en caso de que el
        desperfecto haya sido ocasionado por algún acto que le sea imputable. En
        este caso el arrendador se obliga a sustituir al arrendatario dicho
        vehículo por otro en buen estado de uso, considerando las
        características del vehículo arrendado, dentro de las dos horas
        posteriores al momento de que la arrendataria haya hecho saber su
        descompostura, siempre que el vehículo se encuentre en la localidad
        donde fue arrendado o del domicilio del arrendador, además se compromete
        a bonificar en el cobro por la renta, el tiempo que el arrendatario no
        haya podido utilizar el vehículo por la descompostura no imputable a él.
        El término expresado en este párrafo podrá ampliarse, a voluntad de las
        partes, cuando el arrendador acredite su incumplimiento de la obligación
        antes mencionada por causas ajenas a su voluntad. Para el caso de
        extravío de las llaves el arrendador le hará llegar al arrendatario un
        duplicado de las mismas dentro de las dos horas siguientes al momento de
        ser informado de su extravío, o de que se cerró el vehículo con las
        llaves dentro, siempre que el vehículo se encuentra también dentro de la
        misma localidad mencionada en el lugar de origen del arrendamiento.
      </p>
      <p>
        DÉCIMA SEXTA. Cancelación del arrendamiento. El arrendatario tiene en
        todo momento el derecho de cancelar el arrendamiento regulado en este
        contrato, siempre y cuando la cancelación se realice dentro de los cinco
        días a la firma del presente contrato y antes del inicio de la vigencia
        del arrendamiento. En este caso, la cancelación será sin responsabilidad
        alguna, y el arrendador deberá devolver íntegramente todas las
        cantidades que el arrendatario le haya entregado, en un plazo de 2 días
        hábiles.
      </p>
      <p>
        DÉCIMA SÉPTIMA. Causas de Rescisión. Las partes manifiestan su voluntad
        para aceptar que operará la rescisión ante cualquier incumplimiento de
        las obligaciones contenidas en este contrato.
      </p>
      <p>
        DÉCIMA OCTAVA. Pena Convencional. La pena convencional será del 20% de
        la cantidad total determinada como precio del arrendamiento del
        vehículo.
      </p>
      <p>
        DÉCIMA NOVENA. Reclamaciones y quejas. Las partes acuerdan que el
        arrendatario podrá enviar cualquier reclamación o queja del servicio al
        correo electrónico del arrendador proporcionado en el apartado de anexos
        del presente Número de Contrato R65559 , o en su defecto, presentarla en
        el domicilio descrito en el documento mencionado. En cualquier
        circunstancia el arrendador deberá dar respuesta al arrendatario en un
        plazo no mayor a dos días hbiles contados a partir de la recepción de
        la reclamación o queja.
      </p>
      <p>
        VIGÉSIMA. Domicilios. Para los efectos de este contrato se señalan como
        domicilios de las partes los que se citan en el anexo de este contrato.
      </p>
      <p>
        VIGÉSIMA PRIMERA.- Contratacin por medios electrónicos. Las partes
        acuerdan que en lugar de una firma original autgrafa, este contrato,
        así como cualquier consentimiento, aprobación u otros documentos
        relacionados con el mismo podrán ser firmados por medio del uso de
        firmas electrónicas, digitales, numéricas, alfanuméricas, huellas de
        voz, biométricas o de cualquier otra forma y que dichos medios
        alternativos de firma y los registros en donde sean aplicadas dichas
        firmas, serán consideradas para todos los efectos, incluyendo pero no
        limitado a la legislación civil, mercantil, proteccin al consumidor y a
        la NOM-151-SCFI-2016, con la misma fuerza y consecuencias que la firma
        autógrafa original física de la parte firmante. Si el contrato o
        cualquier otro documento relacionado con el mismo es firmado por medios
        electrónicos o digitales, las Partes acuerdan que los formatos del
        Número de Contrato R65559 y los demás documentos firmados de tal modo
        serán conservados y estarán a disposición del consumidor, por lo que
        conviene que cada una y toda la información enviada por el Proveedor a
        la dirección de correo electrónico proporcionada por el Consumidor al
        momento de celebrar el presente Número de Contrato R65559 será
        considerada como entregada en el momento en que la misma es enviada,
        siempre y cuando exista confirmación de recepción./p>
      </p>
      <p>
        Sin perjuicio de lo anterior, las partes se someten a la jurisdicción de
        los Tribunales competentes en renunciando expresamente a cualquier otra
        jurisdicción que pudiera corresponderles, por razón de sus domicilios
        presentes o futuros o por cualquier otra razón.
      </p>
      <p>
        VIGÉSIMA TERCERA. Aviso de privacidad. Las partes se obligan a que la
        información contenida en este contrato, sólo podrá ser usada para los
        fines propios de este acto jurídico, por lo que cualquier uso distinto
        al pactado será considerado como incumplimiento de contrato. Leído que
        fue el presente contrato, comprendiendo las partes el alcance legal de
        todo el contenido del presente contrato, lo suscriben por tantas partes
        sea necesario, en la Ciudad de Santiago de Querétaro, entregando una
        copia a las partes que en este acto jurídico intervinieron.
      </p>

      <div class="d-flex justify-content-between mt-5 pt-5">
        <div>
          <span>Nombre y Firma</span>
          <h2>ARRENDATARIO</h2>
        </div>
        <div>
          <span>Nombre y Firma</span>
          <h2>ARRENDADOR</h2>
        </div>
      </div>

      <div class="description">
        <h1>ANEXOS DEL CONTRATO <span>R65559</span></h1>
        <label><strong> ANEXO I -</strong></label>
        <p class="d-inline">Información del cliente</p>
        <label for="">Titular:</label>
      </div>
      <button class="btn_1 mt-5 agreeBtn">I agree</button>
    </section>

    </div>
    </div>

    <!-- Terms and condtion Modal End-->


@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
<script>
    $(function(){

        $("#loginNow").on('click', function(){
            let email = $("#authEmail").val();
            let password = $("#authPassord").val();
            let data = {
                email: email,
                password: password,
                billing:true,
                start_date:"{{ $startDate }}",
                end_date: "{{ $endDate }}",
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ asset('postlogin') }}",
                type: "GET",
                data: data,
                success: function(data) {
                    console.log(data);
                    if(data.status == true){
                        $('#authBillDiv').html(data.billView);
                        $('#loginDiv').addClass('d-none');
                        $('#authBillDiv').removeClass('d-none');
                    }else{
                        toastr.error(data.data);
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });

        $(document).on('click','.rentNow',function(){
            let duration_type = "{{ request()->duration_type }}";
            let car_id = "{{ request()->car_id }}";
            let pickup_location = $("#pickup_location").val();
            let pickup_date = $("#pickup_date").val();
            let pickup_time = $("#pickup_time").val();
            let drop_location = $("#drop_location").val();
            let drop_date = $("#drop_date").val();
            let drop_time = $("#drop_time").val();
            let payment_method = $('input[name="payment_method"]:checked').val();
            let card_number = $('#card_number').val();
            let expire_date = $('#expire_date').val();
            let card_holder_address = $('#card_holder_address').val();
            let cvc = $('#cvc').val();
            let price = "{{ $grandTotal }}";
            let flight_number = $("#flight_number").val();
            let hotel_name = $("#hotel_name").val();
            let second_driver_info = $("#second_driver_info").val();
            let special_request = $("#special_request").val();
            let noInsurance = '{{ $noInsurance }}';

            if(pickup_location == "" || pickup_time == "" || drop_location == "" || drop_time == "" ){
                return ;
            }
            

            

            // Check if the checkbox is checked
            if ($("#flexCheckChecked").prop("checked")) {
                // Checkbox is checked
            } else {
                // Checkbox is not checked
            return ;
            }
            
            

            
            


            let data = {
                duration_type: duration_type,
                car_id: car_id,
                pickup_location: pickup_location,
                pickup_date: pickup_date,
                pickup_time: pickup_time,
                drop_location: drop_location,
                drop_date: drop_date,
                drop_time: drop_time,
                payment_method : payment_method,
                card_number: card_number,
                expire_date : expire_date,
                card_holder_address:card_holder_address,
                cvc:cvc,
                amount : price,
                flight_number: flight_number,
                hotel_name: hotel_name,
                second_driver_info: second_driver_info,
                special_request: special_request,
                no_insurance : noInsurance


            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('appointment.store') }}",
                type: "POST",
                data: data,
                success: function(data) {
                    if(data.status == true){
                        alert('Rent Requested successfully');
                        window.location.href = "{{ asset('/') }}";
                    }else{
                        toastr.error(data.message);
                        if(data.redirect_url){
                            setTimeout(() => {
                                window.location.href = data.redirect_url;
                            }, 5000);
                        }
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                },
            });
        });

        $('#noInsurance').on('click', function () {
            // Get the current full URL
            var currentUrl = window.location.href;

            // Check if the URL already contains a query string
            var separator = currentUrl.indexOf('?') !== -1 ? '&' : '?';

            // Append the parameter to the URL
            var newUrl = currentUrl + separator + 'no_insurance=true';

            // Redirect to the new URL
            window.location.href = newUrl;
        });

        $('#includeInsurance').on('click', function () {
            // Get the current full URL
            var currentUrl = window.location.href;

            // Check if the URL already contains a query string
            var separator = currentUrl.indexOf('?') !== -1 ? '&' : '?';

            // Check if the no_insurance parameter is already present
            if (currentUrl.includes('no_insurance=true')) {
                // Remove the no_insurance parameter from the URL
                var newUrl = currentUrl.replace('no_insurance=true', '');

                // Remove any trailing '?' if no other parameters are present
                newUrl = newUrl.endsWith('?') ? newUrl.slice(0, -1) : newUrl;

                // Redirect to the new URL
                window.location.href = newUrl;
            } else {
                // Append the parameter to the URL
                var newUrl = currentUrl + separator + 'no_insurance=false';

                // Redirect to the new URL
                window.location.href = newUrl;
            }
        });
    });




</script>

<script>

            $(".click").on("click", function(){
                console.log("clicked");
            })

              $('#flexCheckChecked').on("change", function() {
                if ($(this).is(":checked")) {
                  console.log("Checkbox is checked");
                  $('.overlay').removeClass('hide');
                } else {
                  console.log("Checkbox is unchecked");
                  $('.agreed').addClass("hide");
                  return ;
                }
              });


            $('.agreeBtn').on("click", function(){
                $('.overlay').addClass('hide');
                $('#flexCheckChecked').attr("disabled");
                $('.agreed').removeClass("hide");
            });

    
</script>
@endsection
