<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
</head>

<body>

  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body{
      background-color: #eff0f3;
      color: #7f5af0;
    }

    .important {
      margin-bottom: 50px;
    }
    
    .main {
      display: flex;
      /* width: 70%; */
      margin: 0 auto;
      /* border: 1px solid black; */
      /* border-radius: 4px; */
      border: none;
      padding:0 0 0 0;
      background-color: #16161a;
      color: #94a1b2;
    }
.container{
  border: 1px solid #0d0d0d;
}
    .half {
      width: 50%;
    }

    .parts {
      display: flex;
      align-items: center;
      padding: 0px 15px;
    }

    ol {
      list-style: none;
    }

    li{
      background-color: #eff0f3;
      color: #2a2a2a;

    }

    h3 {
      margin: 0 15px;
    }

    .theme {
      padding-left: 15px;
      /* background-color: #272343; */
      color: #fffffe;
    }

    .container{
      width: 60%;
      margin: 0 auto;
    }
  </style>

  <h1 style="margin: 20px 50px 20px 380px;">{{$timeTables[0]->group->name}}-guruhning dars jadvali</h1>
{{-- @foreach ($firsts as $first) --}}
    
  <div class="important">
      <div class="container">
        <div class="main">
          <div class="half">
            <div class="theme">
                <h2>Dushanba</h2>
            </div>
            <div class="part">
              <ol>
                <li>
                  @foreach ($dushanbas as $dushanba)
                        
                    <div class="parts">
                      <h3>
                        {{ $dushanba->science->name  }}
                      </h3>
                      <p>{{ $dushanba->time->start  }} - {{ $dushanba->time->finish  }}</p>
                    </div>
                    <div class="parts">
                      <h3>
                        {{ $dushanba->teacher->last_name }} {{ $dushanba->teacher->first_name  }}
                      </h3>
                      <p>({{ $dushanba->room->name  }}-xona)</p>
                    </div>
                  @endforeach

                
              </ol>
            </div>
          </div>
          <!-- /// -->
          <div class="half">
            <div class="theme">
              <h2>Payshanba</h2>
            </div>
            <div class="part">
              <ol>
                <li>
                  @foreach ($seshanbas as $seshanba)
                        
                  <div class="parts">
                    <h3>
                      {{ $seshanba->science->name  }}
                    </h3>
                    <p>{{ $dushanba->time->start  }} - {{ $dushanba->time->finish  }}</p>
                  </div>
                  <div class="parts">
                    <h3>
                      {{ $dushanba->teacher->last_name }} {{ $dushanba->teacher->first_name  }}
                    </h3>
                    <p>({{ $seshanba->room->name  }}-xona)</p>
                  </div>
                @endforeach
                </li>
                
              </ol>
            </div>
          </div>
        </div>
        <!-- //// -->
        <div class="main">
          <div class="half">
            <div class="theme">
              <h2>Seshanba</h2>
            </div>
            <div class="part">
              <ol>
                <li>
                  @foreach ($chorshanbas as $chorshanba)
                        
                  <div class="parts">
                    <h3>
                      {{ $chorshanba->science->name  }}
                    </h3>
                    <p>{{ $chorshanba->time->start  }} - {{ $chorshanba->time->finish  }}</p>
                    </div>
                    <div class="parts">
                      <h3>
                        {{ $chorshanba->teacher->last_name }} {{ $chorshanba->teacher->first_name  }}
                      </h3>
                    <p>({{ $chorshanba->room->name  }}-xona)</p>
                  </div>
                @endforeach
                </li>
                
              </ol>
            </div>
          </div>
          <!-- /// -->
          <div class="half">
            <div class="theme">
              <h2>Juma</h2>
            </div>
            <div class="part">
              <ol>
                <li>
                @foreach ($payshanbas as $payshanba)
                        
                  <div class="parts">
                    <h3>
                      {{ $payshanba->science->name  }}
                    </h3>
                    <p>{{ $payshanba->time->start  }} - {{ $payshanba->time->finish  }}</p>
                    </div>
                    <div class="parts">
                      <h3>
                        {{ $payshanba->teacher->last_name }} {{ $payshanba->teacher->first_name  }}
                      </h3>
                    <p>({{ $payshanba->room->name  }}-xona)</p>
                  </div>
                @endforeach
                </li>
                 
              </ol>
            </div>
          </div>
        </div>
        <!-- //// -->
        <div class="main">
          <div class="half">
            <div class="theme">
              <h2>Chorshanba</h2>
            </div>
            <div class="part">
              <ol>
                <li>
                  @foreach ($jumas as $juma)
                        
                  <div class="parts">
                    <h3>
                      {{ $juma->science->name  }}
                    </h3>
                    <p>{{ $juma->time->start  }} - {{ $juma->time->finish  }}</p>
                  </div>
                  <div class="parts">
                    <h3>
                      {{ $juma->teacher->last_name }} {{ $juma->teacher->first_name  }}
                    </h3>
                    <p>({{ $juma->room->name  }}-xona)</p>
                  </div>
                @endforeach
                </li>
                
              </ol>
            </div>
          </div>
          <!-- /// -->
          <div class="half">
            <div class="theme">
              <h2>Shanba</h2>
            </div>
            <div class="part">
              <ol>
                <li>
                  @foreach ($shanbas as $shanba)
                        
                  <div class="parts">
                    <h3>
                      {{ $shanba->science->name  }}
                    </h3>
                    <p>{{ $shanba->time->start  }} - {{ $shanba->time->finish  }}</p>
                    </div>
                    <div class="parts">
                      <h3>
                        {{ $shanba->teacher->last_name }} {{ $shanba->teacher->first_name  }}
                      </h3>
                    <p>({{ $shanba->room->name  }}-xona)</p>
                  </div>
                @endforeach
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- @endforeach --}}





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</body>

</html>