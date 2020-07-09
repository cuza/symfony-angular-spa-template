<?php

namespace App\Controller;

use DateInterval;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class WeatherForecastController
{
  /**
   * @Route("/weatherforecast", name="weatherforecast")
   */
  public function weatherforecast()
  {
    $sumaries = ["Freezing", "Bracing", "Chilly", "Cool", "Mild", "Warm", "Balmy", "Hot", "Sweltering", "Scorching"];

    $respose_array = [];
    for ($i = 0; $i <= 10; $i++) {
      $rand_temp = random_int(-20, 55);
      $respose_array[] = [
        'date' => date_format((new \DateTime())->add(new DateInterval('P'.$i.'D'))  , "Y-m-d"),
        'temperatureC' => $rand_temp,
        'temperatureF' => $this->convert_to_F($rand_temp),
        'summary' => $sumaries[random_int(0, sizeof($sumaries) - 1)],
      ];
    }
    return new JsonResponse($respose_array);
  }

  private function convert_to_F($tempC){
    return 32 + (int)($tempC / 0.5556);
  }
}
