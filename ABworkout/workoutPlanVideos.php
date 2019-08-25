<div class="container">
    <section class="programSection row justify-content-center align-items-center border shadow bg-white">
        <div class="col">
            <div class="pb-3"></div>
            <div class="text-left">
                <button class="btn btn-dark" href="javascript:void(0)" onclick="closeNav()">BACK</button>
            </div>  
            <div class="text-center">
                <p class="font-weight-bold">PROGRAM</p>
                <div id="accordion">
                    <div class="card" ng-repeat="week in weekNumber" style="color: black;">
                        <div class="card-header" id="heading{{week.nameWeek}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{week.idWeek}}" aria-expanded="true" aria-controls="collapse{{week.idWeek}}">
                                {{week.nameWeek}}
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{week.idWeek}}" class="collapse" aria-labelledby="heading{{week.nameWeek}}" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <button type="button" class="btn btn-outline-dark  rounded-0" id="day1" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ng-click="getDayButtonId($event, week.idWeek)">DAY 1</button>
                                    <button type="button" class="btn btn-outline-dark rounded-0" id="day2" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ng-click="getDayButtonId($event, week.idWeek)">DAY 2</button>
                                    <button type="button" class="btn btn-outline-dark rounded-0" id="day3" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ng-click="getDayButtonId($event, week.idWeek)">DAY 3</button>
                                    <button type="button" class="btn btn-outline-dark rounded-0" id="day4" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ng-click="getDayButtonId($event, week.idWeek)">DAY 4</button>
                                    <button type="button" class="btn btn-outline-dark rounded-0" id="day5" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ng-click="getDayButtonId($event, week.idWeek)">DAY 5</button>
                                    <button type="button" class="btn btn-outline-dark rounded-0" id="day6" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ng-click="getDayButtonId($event, week.idWeek)">DAY 6</button>
                                    <button type="button" class="btn btn-outline-dark rounded-0" id="day7" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ng-click="getDayButtonId($event, week.idWeek)">DAY 7</button>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                                <div ng-repeat="work in workoutplan">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h1>{{work.video_title}}</h1>
                                                        </div>
                                                        
                                                        <div class="col-md-7">

                                                            <div data-aos="zoom-in" id="testvideo" style="display:{{blockIfVideoPresent}}">
                                                                
                                                                <div class="embed-responsive embed-responsive-21by9">
                                                                    <video controls="true" class="embed-responsive-item unique-name" >
                                                                        <source src="{{work.video_url}}" type="video/mp4" allowfullscreen/>
                                                                    </video>
                                                                </div>   
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="pt-3"></div>
                                                                    <img src="https://media.giphy.com/media/2xFA2V78EYf8yFbatE/giphy.gif" alt="this slowpoke moves" class="img-responsive unique-name" style="object-fit: cover;width: 50%;height: auto"/>
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="pt-3"></div>
                                                                    <img src="https://media.giphy.com/media/2xFA2V78EYf8yFbatE/giphy.gif" alt="this slowpoke moves" class="img-responsive unique-name" style="object-fit: cover;width: 50%;height: auto"/> 
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="pt-3"></div>
                                                                    <img src="https://media.giphy.com/media/2xFA2V78EYf8yFbatE/giphy.gif" alt="this slowpoke moves" class="img-responsive unique-name" style="object-fit: cover;width: 50%;height: auto"/>
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                <div class="pt-3"></div>
                                                                    <img src="https://media.giphy.com/media/2xFA2V78EYf8yFbatE/giphy.gif" alt="this slowpoke moves" class="img-responsive unique-name" style="object-fit: cover;width: 50%;height: auto"/>
                                                                </div>
                                                                
                                                            </div>   

                                                                
                                                        </div>
                                                        <hr/>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3"></div>
                </div>
            </div>
        </div>
    </section>
</div>