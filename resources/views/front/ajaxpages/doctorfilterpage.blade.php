@foreach ($doctors as $doctor)
    <?php
    $dayOfWeek = \Carbon\Carbon::now()->dayOfWeek + 1;
    $todayTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
        ->where('day', $dayOfWeek)
        ->first();
    ?>
    @if ($todayTimeTable)
        <div id="finddoctors_view">
            <input type="hidden" id="cid" value="4522" data-count="1" data-sync="0">
            <div class="d-sm-flex flex-wrap mb-4 shadow-sm rounded-3 bg-gray-light border doc-list-item">
                <div class="col-md-5 flex-fill">
                    <div class="p-3 pb-0 d-xl-flex mb-3 docdetail2029">
                        <div class="text-center">
                            <a href="javascript:void(0);" data-docid="{{ $doctor->id }}" data-orgid="614"
                                data-nextavltime="Aug 25 at 7:00 PM" class="d-block doctorprofile">
                                <img class="rounded-circle border-success"
                                    src="{{ asset('public/upload/doctor/' . $doctor->image) }}" alt="Dr. Madhur Basnet"
                                    style="width: 200px; height:200px;">
                            </a>

                            <div class="d-xl-none">
                                <h6 class="my-2" data-depid="1974" data-docid="{{ $doctor->id }}" data-gdepid="14"
                                    data-gdocid="623" data-orgid="614" id="doctordetail">Dr. {{ $doctor->name }} </h6>
                                <p class="mb-1 pb-2 fs-12"><i
                                        class="bi bi-caret-right-square-fill me-1 text-success"></i>Department :
                                    {{ $doctor->department->name }}
                                </p>
                                <a data-docid="{{ $doctor->id }}" data-orgid="614"
                                    data-nextavltime="Aug 25 at 7:00 PM"
                                    class="btn btn-sm btn-outline-success small doctorprofile">View
                                    Profile <em class="bi bi-chevron-right"></em></a>
                            </div>
                        </div>
                        <div class="ms-3">
                            <input type="hidden" id="newdocid0" value="4522" data-gdocid="2029" data-orgid="614"
                                data-gdepid="81" data-depid="1996">

                            <div class="d-none d-xl-block pb-2">
                                <h5 class="mb-3" data-depid="1974" data-docid="2696" data-gdepid="14"
                                    data-gdocid="623" data-orgid="614" id="doctordetail">Dr. {{ $doctor->name }} </h5>
                                <!-- <div class="line line-sm ms-0 mb-3"></div> -->
                                <div class="fs-12 ">
                                    <p class="mb-2 pb-1"><i
                                            class="bi bi-caret-right-square-fill me-1 text-success"></i>Department:
                                        {{ $doctor->department->name }}
                                    </p>
                                    <!-- 				<p class="mb-2 pb-1"><i class="bi bi-caret-right-square-fill me-1 text-success"></i> </p> -->
                                    <p class="mb-2 pb-1">
                                        <i class="bi bi-caret-right-square-fill me-1 text-success"></i>Experience:
                                        {{ $doctor->experience }}
                                    </p>
                                    <p class="mb-2 pb-1"><i
                                            class="bi bi-caret-right-square-fill me-1 text-success"></i>Next Available
                                        Time:
                                        <span class="text-success pt-1">Aug 25 at 7:00 PM </span>
                                    </p>
                                </div>
                                <a data-docid="{{ $doctor->id }}"
                                    class="btn btn-lg btn-outline-success small doctorprofile">View Profile <em
                                        class="bi bi-chevron-right"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 border-start flex-fill bg-white">
                    <div id="doctorschedule_4522">
                        <div class="appointment-time-info px-3 pb-3 pt-2">
                            <div class="table-responsive mb-3 mb-xl-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th style="min-width:155px;" scope="col">Dr. Available Time</th>
                                            <th style="min-width: 300px;" scope="col">Available Time</th>
                                        </tr>
                                    </thead>
                                    <tbody class="small align-middle">
                                        <tr>
                                            <td>
                                                <?php
                                                if ($dayOfWeek == 6) {
                                                    $dayAfterTommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                        ->where('day', 1)
                                                        ->first();
                                                    $tommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                        ->where('day', $dayOfWeek + 1)
                                                        ->first();
                                                } elseif ($dayOfWeek == 7) {
                                                    $dayAfterTommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                        ->where('day', 2)
                                                        ->first();
                                                    $tommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                        ->where('day', 1)
                                                        ->first();
                                                } else {
                                                    $tommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                        ->where('day', $dayOfWeek + 1)
                                                        ->first();
                                                
                                                    $dayAfterTommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                        ->where('day', $dayOfWeek + 2)
                                                        ->first();
                                                }
                                                
                                                ?>
                                                <div class="m-1">{{ \Carbon\Carbon::now()->format('Y/m/d') }}</div>
                                            </td>
                                            <td>
                                                <div class="m-1">
                                                    @if (isset($todayTimeTable->from))
                                                        {{ $todayTimeTable->from }} - {{ $todayTimeTable->to }}
                                                    @else
                                                        <span class="badge badge-danger"> Not Available </span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-1">
                                                    <?php
                                                    $todayToken = $todayTimeTable->token;
                                                    $tokenTime = 0;
                                                    ?>
                                                    @for ($i = 0; $i < $todayToken; $i++)
                                                        @if ($i == 0)
                                                            @if ($todayTimeTable->from)
                                                                <a class="btn bookThisTime"
                                                                    data-id="{{ $doctor->id }}"
                                                                    data-date="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                                    data-time="{{ $todayTimeTable->from }}"
                                                                    style="background: #00be9c;">{{ $todayTimeTable->from }}</a>
                                                            @endif
                                                        @else
                                                            @if (
                                                                $todayTimeTable->to >
                                                                    \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i'))
                                                                <a class="btn bookThisTime"
                                                                    data-id="{{ $doctor->id }}"
                                                                    data-date="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                                    data-time="{{ \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i') }}"
                                                                    style="background: #00be9c;">{{ \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i') }}</a>
                                                                <?php $tokenTime = $tokenTime + 20; ?>
                                                            @endif
                                                        @endif
                                                    @endfor
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="m-1">
                                                    {{ \Carbon\Carbon::now()->addDays(1)->format('Y/m/d') }}</div>
                                            </td>
                                            <td>
                                                <div class="m-1">
                                                    @if (isset($tommorowTimeTable->from) && isset($tommorowTimeTable->to))
                                                        {{ $tommorowTimeTable->from }} - {{ $tommorowTimeTable->to }}
                                                    @else
                                                        <span class="badge badge-success"> Not Available </span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-1">
                                                    <?php
                                                    $tommorrowToken = $tommorowTimeTable->token;
                                                    $tokenTime = 0;
                                                    ?>
                                                    @for ($i = 0; $i < $tommorrowToken; $i++)
                                                        @if ($i == 0)
                                                            @if ($tommorowTimeTable->from)
                                                                <a class="btn bookThisTime"
                                                                    data-id="{{ $doctor->id }}"
                                                                    data-date="{{ \Carbon\Carbon::now()->addDays(1)->format('Y-m-d') }}"
                                                                    data-time="{{ $tommorowTimeTable->from }}"
                                                                    style="background: #00be9c;">{{ $tommorowTimeTable->from }}</a>
                                                            @endif
                                                        @else
                                                            @if (
                                                                $tommorowTimeTable->to >
                                                                    \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i'))
                                                                <a class="btn bookThisTime"
                                                                    data-id="{{ $doctor->id }}"
                                                                    data-date="{{ \Carbon\Carbon::now()->addDays(1)->format('Y-m-d') }}"
                                                                    data-time="{{ \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i') }}"
                                                                    style="background: #00be9c;">{{ \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i') }}</a>
                                                                <?php $tokenTime = $tokenTime + 20; ?>
                                                            @endif
                                                        @endif
                                                    @endfor
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="m-1">
                                                    {{ \Carbon\Carbon::now()->addDays(2)->format('Y/m/d') }}</div>
                                            </td>
                                            <td>
                                                <div class="m-1">
                                                    @if (isset($dayAfterTommorowTimeTable->from) && isset($dayAfterTommorowTimeTable->to))
                                                        {{ $dayAfterTommorowTimeTable->from }} -
                                                        {{ $dayAfterTommorowTimeTable->to }}
                                                    @else
                                                        <span class="badge badge-success">Not Available</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                @if (isset($dayAfterTommorowTimeTable->from) && isset($dayAfterTommorowTimeTable->to))
                                                    <div class="m-1">
                                                        <?php
                                                        $dayAfterTommorrowToken = $dayAfterTommorowTimeTable->token;
                                                        $tokenTime = 0;
                                                        ?>
                                                        @for ($i = 0; $i < $dayAfterTommorrowToken; $i++)
                                                            @if ($i == 0)
                                                                @if ($dayAfterTommorowTimeTable->from)
                                                                    <a class="btn bookThisTime"
                                                                        data-id="{{ $doctor->id }}"
                                                                        data-date="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}"
                                                                        data-time="{{ $dayAfterTommorowTimeTable->from }}"
                                                                        style="background: #00be9c;">
                                                                        {{ $dayAfterTommorowTimeTable->from }} </a>
                                                                @endif
                                                            @else
                                                                @if (
                                                                    $dayAfterTommorowTimeTable->to >
                                                                        \Carbon\Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i'))
                                                                    <a class="btn bookThisTime"
                                                                        data-id="{{ $doctor->id }}"
                                                                        data-date="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}"
                                                                        data-time="{{ \Carbon\Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i') }}"
                                                                        style="background: #00be9c;">
                                                                        {{ \Carbon\Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 20)->format('H:i') }}
                                                                    </a>
                                                                    <?php $tokenTime = $tokenTime + 20; ?>
                                                                @endif
                                                            @endif
                                                        @endfor
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="text-end">
                        <a title="Check Other Schedule Time to take appointment"
                            class="btn fw-semi doctorapptfulltime rounded w-100"
                            href="#" style="background: #00be9c; font-size: 14px;">Check Other Schedule Time to take appointment <em
                                class="bi bi-arrow-right"></em> </a>
                    </div> --}}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    @endif
@endforeach
<div class="row">
    <div class="col-md-3" style="margin:0px auto;">
        <nav>
            <ul class='pagination'>
                @for ($i = 1; $i < $pages; $i++)
                    <li class='page-item @if ($i == 1) active @endif'><span
                            class='page-link page_nav' data-page="{{ $i }}">{{ $i }}</span>
                    </li>
                @endfor
            </ul>
        </nav>
        </div>
    </div>
