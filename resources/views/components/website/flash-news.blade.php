<div>
    <div class="flash-news-banner">
        <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <span class="badge badge-dark mr-3">Welcome to Myanmar News</span>
                    <p class="mb-0">
                        <strong>မြန်မာနိုင်ငံရှိ အရင်းအမြစ်မှန်၊ ယုံကြည်စိတ်ချရပြီး အမြန်ဆုံး သတင်းများကို တင်ပြသော မီဒီယာအဖွဲ့။ ကျွမ်းကျင်သူများ၏ ချက်ချင်းထုတ်ပြန်မှုများနှင့် စစ်မှန်သော အချက်အလက်များကို ပါဝင်တင်ဆက်ပါသည်။</strong>
                    </p>
                </div>
                <div class="d-flex">
                    <span class="mr-3 text-danger">
                        <?php echo date('D, F j, Y h:i A'); ?>
                    </span>
                    <span class="text-danger">
                        <?php
                            $weather = json_decode(file_get_contents('http://ip-api.com/json/?fields=city,weather'), true);
                            if (isset($weather['weather'])) {
                                echo $weather['weather']['temp'] . 'C, ' . $weather['city'];
                            }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
