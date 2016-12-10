<div class="type_16">
    <div class="type_16_weather">
        <div class="main-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 absolute-header text-uppercase">
                        <div class="pull-left">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> 
                            <?php if(isset($country) or isset($city) and $country != null): ?>
                                <?php echo e($country); ?>, <?php echo e($city); ?>

                            <?php else: ?>
                                Thailand, Bangkok
                            <?php endif; ?>
                        </div>
                        <div class="pull-right">
                            <span class="simple-weather">
                                <span class="simple-weather__day">
                                    <span class="simple-weather__date">
                                    <?php if(isset($currentDay)): ?>
                                        <?php echo e($currentDay); ?>

                                    <?php else: ?>
                                        Monday
                                    <?php endif; ?>
                                    </span> 
                                    <i class="wi wi-day-cloudy-gusts"></i>
                                    <em class="simple-weather__temp">9°C</em>
                                </span>
                                <span class="simple-weather__day">
                                    <span class="simple-weather__date">
                                    <?php if(isset($nextDay)): ?>
                                        <?php echo e($nextDay); ?>

                                    <?php else: ?>
                                        Tuesday
                                    <?php endif; ?>
                                    </span> 
                                    <i class="wi wi-day-sprinkle"></i>
                                    <em class="simple-weather__temp">9°C</em>
                                </span>
                            </span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>