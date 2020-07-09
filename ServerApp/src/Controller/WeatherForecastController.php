<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
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
    for ($x = 0; $x <= 10; $x++) {
      $respose_array[] = [
        'date' => date_format(new \DateTime(), "Y-m-d"),
        'temperatureC' => random_int(-20, 55),
        'temperatureF' => random_int(-20, 55),
        'summary' => $sumaries[random_int(0, sizeof($sumaries) - 1)],
      ];
    }
    return new JsonResponse($respose_array);
  }
}
