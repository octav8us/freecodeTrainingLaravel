 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-5 m-3 ">

        <div class="col-3">

            @if($user->profile->image)
            <img class="rounded-circle w-100 mt-4"

                src="/storage/{{$user -> profile -> image}}"
                 alt="profile pic" >
            @else
                <img class="rounded-circle w-100 mt-4 "
                     src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFBgVFhYZGRgaGBgYHBoYGBgYGhoYGBgZGRgYGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHhISHjQrISE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDo0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAEAAIDBQYBBwj/xAA9EAACAQMCAwUGBQMCBQUAAAABAgADBBESIQUxQQYiUWFxBxMygZGhFEJyscEVUmLw8SOCkrLCFjRjotH/xAAXAQEBAQEAAAAAAAAAAAAAAAAAAQID/8QAHxEBAQEAAgMBAAMAAAAAAAAAAAEREiECMUFRImFx/9oADAMBAAIRAxEAPwC1sHUb4j7ioCCROW1JWSTimNOJi1FdbUepMe1xp2k/4fzjnsNXKS0XnB9OgbwXioDNpgNFHTbO0etUb55xJ1ih6iaM4kFKtqB1SVydW5lgnDEK6i28s8fi6zlyGY90RlIsDpbOTNDYcOV3IDbQu74ECwxNZjOs7gow35ySpzzDrzhug5Jg1NstjGZkjtOsRDKVwdp2vQAXON4zhzBm36RY0u6Q7uZV3Ld/aGV7oYIWV1NDuxlk6RMx23mY7QU1ZDibC2QOhErOL8HOhpfHZSvMKS4aXFGpkYgrWuGPrJUXBmwSlMZh9rdhDgwKiuZJc2hAzM6LG84opXAlBq3zGaCDvDLamOsu4YfaJrbE0VtalMGVdnR0tkS2W6zsZm9seUXq3JKYU74meThrFmduhyI+2uGRs9Jd0btHGNpeXWRZl7U344xS0/BUvKKNXtBTo6BgTtQgDzhlBNW87VtMmcrO9MVSNg7x4u2BwBLJLEZ3kb2o1bCRQ1asxWRBNh4yw9ztJbC1y8s7AT8JZlznEHq2T6NOTNglpkgZ2kXEkRFzibymxhLZK1JiRmG0uL1R8Rjb/imrZRA/dsVyestuEgu64i1UgCH8N25r84PTpIlPVjeFpfAoNIibSpbqoGyIHb0wp36xlu/fJMJqLnlJbpiztAjbASG/twFOkSnTiBo1Ap5NNfa6WTJ6ibiMrwu6ZGORtLPifEF903pIrimA5AlZd0CQV6YiTsrA3Nz329ZF72d4pS0VCBBkaWwi1trkDeF1b3WMSkzCrTnJii/ck9IbYWmWAh1jb6lhvDaQV95mqOtuFhV3lRdWp1kjbE1T1BjEouIjTvE9Mo7NhyMHuKZD5HKAJdkNnpCzd6hM5iZifQfGdgvv/WKXabWyVxpGJLjAg9tbY7xMPOCJmtq+41c4qWRuYS6ZnHTaSZUriLkyE1CpOOcLtfOAOCapxymtyIL4fduDlsyS/vg6lQN41W0KcyS1ohlLdZb5LjPtYhT3hIfwpDAdMy7u11d3qI2ytcnvdJM1dC3CApjHSQWj6EORNIbZCMTO8RpshOncTfpkuGVKbE6ueestlqUlPSUtlS/MRzk9S26yS/0uGX1am1ZTgYENvuMIi4H2lJf0CgDYlLf3JAxLqY1FLiSMM5GYFfcTXfEyVFmDc5aNbMU1DwmmmY4pX1OTAg8l4gMORBQYqDEaGWW7SrpvCrerhhiBuLBwox5SaqGzqEpbCvymqtnVlEms6isyx3MA4xdAnTLS/fQpxMmFd2LGJD2KS0yJwrpEEe/KHBhKXAcSWYpnvoo7TOSbBY23a1QAGB+kmq9rVx3RmZP8KSMmHWnDNQzJcS6sv/Uzk8pa8O40z7MJlK1vpMt+DN5SXr0TW9sV1LmNe1AbVBbbiiogEsaFyjrkGPbRr24ZZCqMmyztWrjlK2pfup5SAsqQ2TOa2B2EFo3ZZgWG0vqCIRmWCtWq2cmcSiHOJPfADlHWDBTNaB7ngzflOJJa2mgd7eH31RgMrylZVvSZbcR3iVAVEIA3mJ4lwZwcgE4m5pXWCNpIzhjjHPylnY8ypW+WE09i6IhVj0g/akULQancB2yyUx8beg6DzO088uO0TuSdIU9OZ2l9Nd1Jxtg1Z9PLJlcFjTes2dQBPiNjJiBgMORH0I5iLe0zDQJJSU52iVY9F3gWNldaTgzXcIvQBvMXQTfeXVO3YLkGZuJjS31+pGNpWiupBxKF2fPMzhudEo5foWcwjh50neDUKuo5j6tTBi9i61iKUv4iKTAO12eQl1wziIC6TKUAL0kLv4TOarQ3hU8jLLh6YSYxKzA5MurXiXIZk8oY1tOjlcQZqNRPgfHkZ3hl3q6w+sMzG4K6nxGqCA/LPMTQJRR11Z3lU1LA3ECq6ww0MR5TU8v0X4oSdGYLmVFtdVuTLt45xDWv1Qd8qo/yYD95qIktrwOSG5iPuaqqOcz9z2hsQ2TXpqfJwf2g1Ttbw8c6+fQM37CWyq2dvd60x1k9tZqRvMCPaRZJgItQ566MAeeDuZecM7W07khaVWnqP5WYq3/SRkyyfovnQBsATH9t+2iW2aNAq1bGCea08/Yt5TWtbO6kM2CQRldiM+B8Z8+cctHo16lJ86lcgk8yM7Nnrkb/ADmrLDxxDdXb1HZ3dnZtyzHLH1Mh1SLM7JjaQPD7FtQZf+YfsZWASehVZG1KcH5HnzGDAtqcnResApX4/MvzX/8AIclZTupz/rwlYwdSpcpbUK2BiV1g+ogTS/0wFc+UxZpqhuq0rKrFjLC6pYJBkSUxL6XDrWlgSZ6WZynUkzVBJ9Zof3M7H+8il7TsLcLjYQdaBJ5SBb8kwy2vlJ3MZWhVGxLDGJInDsbZ3klHiSg4XfMt+H0Ru7kAcyemB5+Eklpors9w5gctt4Zmna2E8w4x7QiraLZFIGxdwSD+lBjbzP0i4B7Sqi1ALlVZCd2RdLJ56c7j7yXwV6kbTO0Cr2mhgYbS4kjorowZWGQQcgiNrPqGeZ6TOMvMu2/a96dRregdJX435nJHwr4es89uLh3Op3Zz4sxb94Txdy1xVJ5mo+c/qMDnWRcNiincSjpaPQ4jAI4GFfQfYLjX4uzR2Oaif8Op46l5Mf1LpPzjO2nZJL6nlQFrqO4+Pix+R/EftMD7Hr8rdvRz3alMnH+aEEf/AFL/AEns4E6S7HO9V8vVaRRmRhhlJUg8wynBH1EZmege1js+aVwLlFxTq4DY5LUA3z+oDPqDPPTOdmV1l6PzFGaoswJAZtOwvYipeEVXLU7cH4hszkflTP5fFvkMnlRdkuCm8u6dDHdJ1PuRimhBfcbjOy58WE+kqNJUVUVQqqAqqBgAAYAA6CIlZw9iLUKAisjDk2pmJ/VqO8y/GuLULdjR98juNjoOQp8GPIN5Sw9p3as21MW1JsVqgyxB3SnyznozbgfMzxXn1zL19J42t0ie8Ykb5k/4QLMbw3iL0mBU7dQeRms/qIdQw6zn5Sr6dqUwJAlPVGvWyZMlQASemJHfww8Ypz8SIpVZQZjtB5iWVO0duS/aPXgz/wBs6JpvZ62L1Dn8o8+Z26SXtzxMqBbIcDAL89/Bf5mh7N8HKZY8ziYTthWD3dTHIHT9Bgyb0ZtUk7FiKGmm7G9pDbVAj96g7AMp/ISca1PTxI6z3Gnw5BurNjwyCJ80EbH0n1BZr3Ez/Yv7CJJUr547YVUe9rlF0jWy48SvdZvmQTKXE0Hbq093f3KdNeoY/wA1D/8AlM/CwooooCnRORQrV+zavo4nb/5M6/Wm/wDIE+gHM+dewb44jan/AOTH1Rh/M+iXM141z8vao7TLRe3dLh1RGHxOQoDc1IJ65nz9dmnqIVsgEgEDn6TXe1rjPvbhbdc6aIOrfYu4B5eQwPmZgZLWpErIOYOR+0jE4DOyK9c9h9uum6qfmzTT0XDMcepI+gnqlVtKs3gCfoMzyP2IXyh7mgT3mVKijxCEq/8A3J9Z65cplXHPKsMeoMJfb5f4pxF7iq9ao2p6jFif2AHQAYAHlB6YCnOc7bCcqoVJUjBBII8CNiIqayVudVOm0srByAfDpK9KZxk8pc8PK5BKjy2zJK1x1GKxnDctCalEkk6CBmNWyZuQM05B/emKF/01/CKB62OBoBsojv6QvhLmnnwj6qeEzIYoxYBRkCeP+0Xg5o3JcA6Knez01fmH8/Oe8vb4GfKZTtRwdLui1PO4OVbHJh4yyYR4JFCb+yejUam4wykgj+R4iDYlaJjsfSfT/DWLUqZPMohPqVE+YlQt3QCSdgBzJPICfTnDzopopO4RQc+IUZjWfJ4L7QKgbiVyRy1qP+lEB+4Mzcsu0rlru4J5mtU/7ziVkLPRRThihXYpydgXvYpSeIWoHP3yfQZJ+wM+i6pngvsuo6+JUj/YtR/ohX/yE91vLlaaPUc4RFLMfAAZMSud9vnntoW/HXOrOfeNzGNhgL9sSjEtu0/EzdXNSvjGtth4KowufPAGZUw07EDOARZhV72M4r+GvaFUnChwr+Gh+42fIBs/KfS6vPkyexdivaHSNFKFy+iogChjsrqMBSW6N0OcZPLwgrHe0ng34a+cgdyqTVX/AJj3x8mz9RMuhnvHa/gNO/ogEhXXdKnPGeYPip2nmdt7P7t6ujCaRzqawUA8x8WfLEmLLrPWzEsAFJJOABvv6T0Hs32XcYesNPUJ+Y/q8PSavs12GtrXS+WqVf73wAD10KOXzJPnNFXtVO+MSYt8rmRnTwpCMYEYnCUHQTU/hkI5TjWiy454zP8ATU8IppPwi+EUYYIZhznCwEHDYPlGA5yftGqM1DGechrU0YZAx9vrBKtUrjAJHlJqdTI84l1WU7V9jUvFBYlHUEK6jOx6MOomDT2YXZqBNVPR/flth46MZJ8s/OezLX8syQODyMprM9mOwdvaMHP/ABKn97Dl+lfy/vNa9JQOQPhtBa9dsjGPnHC5yMHaTo9vAPaBeq99VCBQqHR3VUZYfEcjmc5GfKZma32g8Ae3uHqnenVdnVvAk5Kt4GZICCuRTpE5KaUdOAffbHXM03Bew17c95aRRP76uUHoARqP0x5wL/2O2ebirW6JT0A+bsD+yfear2scR0WIphsGo6qQDglF77fLIAPrLHsZ2QFijK1TU9TSWIGwKjAAGfMw3jfZW3vdArFyKZYgKdPPA3OM9JGePevnUGcLT3biPY+xtrSu9K2R6i03YGqxcghT3gXJC4G+2OU8IxK1S1GdE5DeFcNe5qLSprqdj8gOrE9AJAKBLbg/Z25uWxRpO46tjCD9Tnuj0zmewdm+wttQpjXTSpV5szjUM9AFbYfSaRGCaQuExtpAAX6CNgw/Z/2bOmlri6qDlmnRd1H6S+eXoBPQbGwSkgRFCqOg+5J5knqTvElcx61CPSQ1KRGq2fSQtV32iZxLomZsct5EXyfAxxq7QWszasgZigzV5xQXWf7TFJqIxncg8jvn+IQHB5CDUqoG2dsx/vIDtB3OceUfStQO9nn9IPqbOM8/GSe9xttAas6V22nU73gI1gD6jrA6o6/KRLQDMTq28NpI5yMRqaD3dj5SXKs2I6tmjKUcB1O2GAIxMzxT2f2D76ChbbKEjB8dPKa9TuAcYE636dvGDXl9b2UowJp3Dgf5oD9xiDUvZQ+rv3I0/wCNM5x82xPXqT7YBHpJNIK46mNq6ynZ3srbWWlqSB361XwXHjp2wvoAJpa1Vcd5gOsEubTUMBiDB7bhCKdTEufFtwI1MG0XzuDkdDHgkZ6ec4qAAhRgeUWcDfeUoHiNglxRq0WYjWjISOmtSP5ngXGOztxbOyPTfAOA4VijZ5FWx9p9Fax0H0j3KsN15R6JXzXw/hFeu4SnTdiTjZTgeZbkBPbex3ZJLOkORqtg1H8fBFP9omhSmoGQuOmwkyv0AH8yWr/h7YHKQVSpYahuPoY9jk7f7QWswVtz9IvaToQ1THnOiuSukDceMjcDGQZygMbc/OBynTJ7zZzk9dsekIUqRiJ84I6SKntGiQlWG/SMSqD8JM6m+Y0PiWIdip/oCKEe/ilA9K3bTnbMHYnOIXRqZyc/Kcqr1Ei4HAIkjoMct53Vvud481dQ5byCNWPLGIwjHOEojY3jTTzFiwOafrE1MdNjHvU226dJAr4G5wT9oD6bYODzjmuQDu30lXUfSSdROfHpK+rc94Hf+IhjQ/ilzHfittjKBq3WSW110IxiUxoCQRg9Y63TQunp5yop3Sttq3j6l8ozk8o4i0R8E9IEbhdWDkyqqcROMqYkuWxqxmMMX61FG8iq3BzlTgdR4zPnigJK+HSMo35YkbiMXjV9Uu204GOeTnnGm8A3B3lQXJ6wdsjkcy4mLu94uKdPWRqPlBLXiSVl1gFTywYBTqBh/BnSoAwNvIScVxbLfDl4R4vFzzlFrYdNvGd92T1lw4rduIgddoqfFQ2wIlPUQDmYOKC6g4P0jEvi0a3JznMVw5bDAynFbfYyc1yBsQT4SHFY+8fxMUr/AOov/Z9opF4tPQphSfOSVFwN5xyikE9YqlMHfM0gdUC88k+caa46SfynVQEgY2mdCascDznaowNox6QDZHykijO5O/hG0wG7MT8Ma1uRzOYXUQ4yDGqmR3ucCku6RHSAEKTyOftNNWpKdiZD/TlALGO9XemfXOdgfpFVpl8EfPEu7agGzgcpIbQKOgPlNprLNZKjBwzA56QgIN+uZbXFEaTmVVaiyjKDJ8IWAdQB0rsfAwygTpxnBiNuCoZ9m8RJUpb+MRahW3UZPU/eBvTcb46yxGPDGIx6uTFmkuIGViNSt8pEKhVhkHzlxRs8jHLrtCKHDFJ3G48YqyxWaAd5wON5bVbIDOBK+pbqdjsY1NB1ahHmIqdQkctpMaSjY8ohYtsVzpkrUsCvU33BhdBBpzjaFG21Y7v2ktpblsqQRjyk5fyxL6VYo/7x9MZAyPnLg8OboR840WR8N/LeaZ1WY/ynJa/gTFBq3qDUMHx2nQgAxJHONvtIy+Ac85n0jrLmIPnxGI9Kgxlo4uunYiToRs++ec5qhNGmp3kdWnhpcDGEeIxee8dIE9ENv1klRcKBIwSs6XyYESUwMjxjalHO2ZL6yRVzylFVcW40wFLVs8tpoQmOYielvmWCgewDDB5Qy24bp3G8tkQZ6R2d8CXTVb+BXJ2jf6YnQSzNPrO5EnaA1oAeskan95OUjioJ8BIqtrodgJX1rDfU3Twl+6icWnkbyms+lur8ht5yxo2O2xhqUeZ2nGQ4k2lqNKGBtvOpTHhv4yZCR5TrbxRGluCMESOla45bCEYx6TrjUMQGe68xORvuPOKUDvche8VPrI6V0lTZOnWSVgWODjT1nTbooJXuzntXoS2CuIM6+U4r6+7nGPKJhpO24mtTElCs2fDEIZ+pglDIJY9ekdWqYP7COWQztJr8pIiZMhD4XlvOvWCjLGNE7pmJABz3lBd9paQcIrjMtLW8U8t8y8oZRNRhzjlJ07QR1JPrH1apQZk5GCcnrHjlK+yuNZk718c+UvKGJcgRpbeDPVBOxjhW23k5B73XSSJUz6wVkzuRJCjDcCORglqg2jXreEgO+56SN6gjkYNpusa9QCV1xXVcMTtHULkPuu4EcgYah6Thrwd66k4ELpouxjlphwfM45ztIXffI3g9xdhANXU42jVH42wYlWcRxgRzsBvma6RzTOxv4oRRvj+mUH4esT/CPWKKcwwfEZ1/iiilHT8Mi/N8ooplYLbpK/i3wN6TsUo8dv8A/wBy3qJ6jwP8v6R+0UUz9b+NDR+IQTifwmcimqxEfCeUIvukUUnw+hqPxGFDpFFEBtTkI6p8MUUsRCeRgd3y+c5FJ8WK/ivwj0k3Zr4G9YopfifUqfGZYD4D6RRSeK32ht/gMB4l+T9Qiimov1ZP8M6fhE7FDIaKKKZbf//Z"
                     alt="profile pic" >
            @endif


        </div>
        <div class="col-9 pt-5">
<div class="d-flex justify-content-between align-items-baseline ">

    <h1 class="d-flex">{{$user->user_name}}
        <follow-button user-id ='{{$user->id}}' follows="{{$follows}}"></follow-button>
    </h1>

@can('update',$user->profile)

    <a href="/p/create">add new post</a>
    @endcan


</div>

            <div class="d-flex">

            <div class="pe-2"><strong>{{($user -> profile ->followers-> count()) ?? "teet"}}  </strong>followers</div>
            <div class="pe-2"><strong>{{$user->following ->count()}}  </strong>following</div>
            <div class="pe-2"><strong>{{$user->posts->count()}}  </strong>posts</div>
           </div>
@can('update',$user->profile)
                <a href="/profile/{{$user->id}}/edit">edit profile</a>
            @endcan
                <div>
            <div class=""><strong>{{$user->profile->title}}</strong>
            </div>
        <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}} </a></div>
            </div>


        </div>
</div>

    <div class="row">
            @foreach($user->posts as $post)
                        <div class="col-4 mt-4 pt-4 ">
                            <a href="/p/{{$post->id}}"> <img  class="w-100"  src="/storage/{{$post->image}}">
                            </a>
                </div>
        @endforeach
    </div>
            @endsection
