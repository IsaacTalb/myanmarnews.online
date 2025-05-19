<div>
    <div class="flash-news-banner">
        <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <span class="badge badge-dark mr-3">Welcome to Myanmar News</span>
                    <p class="mb-0">
                        <strong>A media group in Myanmar that delivers authentic, reliable, and the fastest news from trusted sources. Featuring real-time updates from experts and presenting accurate, factual information.</strong>
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
