@extends('layouts.app')

@section('content')

<section class="main-header">
    <div class="header-minimal">
       <h1 class="store-title store-logo">
          <a data-savepage-href="/" href="https://moskav.com/" style="max-width: 100px;">
          <img
             data-savepage-currentsrc="https://cdn.shopify.com/s/files/1/1608/3005/files/Moskav_Logo_800x157.png?v=1591003130"
             data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/files/Moskav_Logo_800x157.png?v=1591003130"
             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyAAAACcCAYAAACHkM/7AAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAGYktHRAD/AP8A/6C9p5MAAAAJcEhZcwAALiMAAC4jAXilP3YAAD/MSURBVHja7V0HmFVF0i2SgoiMEbOYUNRFjItpDWvEnDBnMSdMKLpiXhF1zWLOOWEWE0YU84KCrgoo5oAougYE/z7emnWYf8J787r7nr6vzvfVty7izO2uDtUVTomEQ6vIYsgXrUznBoMhR+zsZLKT7wlkipOJTlYwtRgMBkM8bOfkZic3RZQbnGxoUx8dczo5I7K+8bv+5WQem36DwaA43snvRDLByWKmFoPBYIgDeKavyunAf8FJF1NBNMzi5Hwn03LQ9Wgnc5sKDAaD3jtDyB4gI53MbqoxGAyGOOjg5OGcDvypTo4RS8+JgXZO+jv5KSddP+JkZlODwWDQs+ARsgfIUD0nDQaDwRABczn5d46H/gdOljE1BAUeeHs4+TZHPV/upLWpwmAwSBYNfZ3sAXKBmDPMYDAYomEpJx/nfPBf6mQmU0UwbOzkk5x1fKKpwWAwKLpJVvTN9AA50tRiMBgM8bC2ZAwgeR78k5xsYKoIgpWdjMlZv7852d1UYTAYFGtKxj7F8vj41cn2phaDwWCIB1Ah5lGU3FCNQI2pwyuWkKzQP2/d/uhkXVOHwWBQ7ChZDSDLA+Q7J71MLQaDwRAPA0gugJ+d9DV1eAMob4eS6PYzsTofg8HwJ44VrvSrD50sbmoxGAyGOGCjQhzlpKuppWJ0Ur1OI9HrW07mNbUYDAa9dy4he4C84mQOU43BYDDEQXsnDxFdAtOdnOmkjammxUAx/8mS5TSz6PVJyeieDQaDAWfUA2QPkPvFKHgNBoMhGtAV+02yi+BTsVzclgI0t/sLV3En5DoxCl6DwfDnvfMq2Rl1kRgFr8FgMEQDIxUi5DbJunYbysNWTr4g1OepphqDwaBArcWHZGfU0aYWg8FgiIe1JH8K3obkBzFKxHKxhpP3CXWJtDojFzAYDLVYTTLWKSYK3h1MLQaDwRAPoEL8jdBohYwQK1wuFd0lK6Jk1CPYzTYyFRkMBsX2wlWjhpTV1U0tBoPBEA/HkRqttc3rQNVoeblNYwEnjxLr8Ssny5uaDAaD4kiyM+ojyXomGQwGgyECYNhfRmy4Qj5wsqypqlHUOLlesjQnVh2+42RBU5XBYFBcQHZGvSZZYbzBYDAYIgAUvGxUiA0J+lnMZOpqUH+DhKubcEPynJNZTV0Gg0EyqtuhZGfUg3bHGAwGQzyg6dLrCTxAJjnZ0NQ1A9An5QgnPyagv1udtDWVGQwGh9mdjCQ7oy4VS/U1GAyGaFhSstzX3xMQ1DjUmMr+h52cfJOI7gaZugwGg2JRJ+PJzqj+phaDwWCIhzWFr2FdY/KLk/1MZX9gPeHj0G+KgvdgU5nBYFCs6mQy0Rk1VR06BoPBYIgE8J6zUvA2JKMl855VM8AmNSohneHhuIVtNYPBoNhGzwWWMwp9sNY0tRgMBkM8HJuQIVvrTT9LsvqHasQiToYnpjPU76xsW81gMCgOJzujJjrpZmoxGAyGOEDB3SWJGbOQzyTrolttAEXk7QnqCzTKXW27GQwGxXlkZ9QbTuYytRgMBkMczOzk/gQN2t/VEO9YRbqaxcmFkla6XK285KSzbTeDwSAZG97dZGfUw3ofGgwGgyECQIX4WqIPkB+c9KkSPYEz/3gnPyeqKxgbxq9vMBiAGicjyM4o9JlqbaoxGAyGOFhC0mFSakhwic1bcB0hTW4v4WKMKVfOF+PXNxgMGVDH9gHZGTXA1GIwGAzxsLqT7xI2bJGO1L/gxm1vJ58mrCPIkbbVDAaDAoQUk8jukV1MLQaDwRAP20vGf56ycTvOyXIF1Q+48scmrh+sr+1sqxkMBsWWwpVOinTev5laDAaDIR6OTty4rZXLpXg1BuhQP6IAukGEbTXbagaDQYGmpNOJzqhPnCxtajEYDIY4QNrSRQV5gHzrZOMC6aaLk/sKopsP9TFlMBgMwNlkZ9S/ncxtajEYDIY4AOXg0IIYuZBhkrF6pY5OTq5wMq0genndyRy23QwGg2QNZO8gO6MeddLeVGMwGAxxUOPk1QI9QH5xsn8BHoWnOvm1QHp5UIxf32AwZJjNyXNkZ9SVYhS8BoPBEA2LO5lQIEMXMtrJYonqAxfgQU6mFEwnl4lR8BoMhgwLOnmP7Iw60dRiMBgM8dBL0qbgbUhQ2DhIsjB/atjGyZcF0wfkeNtqBoNBsYKTb4SLgnd3U4vBYDDEw7aSPgVvQ/K5ZP1NUsKawteYy/j1DQaDb2zq5CeiM+pHJ+uYWgwGgyEejiqgwVsrKHLsmIgelpFi1eLU59df27aawWBQoE6PiYL3Uz2DDQaDwRAByMm/oMAPEHi1dkxAD8iHHlZgPYBfv7ttN4PBoPin8NUNdjG1GAwGQxygad+9BTZ8IS85mY9YBzVObhQub2CIy9349Q0GAwCijVvIzqjHnXQw1RgMBkM84/flgj9AUH+AAmhGBiZceIOlmDU4deUxu9wNBoNiVidPk51RV4tR8BoMBkM0gKp2XMGNX8h4Jz3I5r6tkyOd/LcK5t8ud4PBUIsFnLxDdkadZGoxGAyGePirk8lVYADXNpliaYSHaMzOTiZVydyfbFvNYDAo4Az6iuh8muZkT1OLwWAwxAN6ThSp23ZT8q2TTUjmfX0nH1XJvONy39u2msFgUGwsXJFffMt6phaDwWCIh35VYgTXrUWYPec5RwOu0VU05+D638C2msFgUOwrXKQbnzlZ1tRiMBgMcYA0oH9V2QPkFycH5DjnXYWv+DJGQ8geVb7X2jjpJBndck/JvK19nBzo5Dgnpzs5z8klToaoXCoZRTboSgfo391Osn4qMJbmESvsj422qscFdE1DF1s72Ueyeq6BTs5WvdXX5cVOLnRyjpMzJKs5OFrPIzTp3EKyRngrOVnKybxOZhOetFGfOI3sjHpb59uQPtrpHgWl8pJOVnayrpOtnOzh5FA9c0/VvXq+7tXLGjh7B+k+haN2T92jaBa8jP78WYST3MZgoAcoeO+uMmMY8pZkxfexMZeTO6twvscKNw2yb6DYfg4nyzvZXi8w0Cw/5+Q/Tr6QLOXjN2kZoxuaOn6q6/hhvUBhAPeSjOrYiv39GTIwMlbVBwKMZlDHPq96/Fx1AQa7Srz5+G+n6c9B36KvnUyUrEj7RSf3O7lC1xEMqL9L1lNnTj3DU3R83Uh2Rj2pxqQhnTWER8bCeu5tK1lD5Qv0jsVZO0ayNOdv9LydqvusklRi/IzvJetrhUfr47o34Ujo7aSbpNP42GDIFZ2djKxCg3i6ej7aRJzrjuoBnVaF8/20ZLSbRQYuw55O+jq5yskr+tCYGnFNg9DgDcnIFnbTy7CdHXNlAUb9GpJFM26TLFXymxY+FkPp+Uc1gKDre9VLu7tkhCLw4rNHTDqqwc90Rl0b8T5A1BIRzB7ksryeIW1Jztel1MiHsQ9WxWecfCBZbScDjf3P+uB5wslZkkVLFopsZ5SCOcjX3Rzk51dbXYus87d4Kk7IRXUD/16F8oUaGrE8qSfoAVWNc30TySUW4gG/lmRpN085+VJ48tphME9wcqt67xewt0WjQGQSRdFIgUNPpMmSJtHDJPXK4lFyimQpJ0sTPv7nU+800/ydEmnsiFidLFkEE3fQ56SCb0MU7rAczm78vi4a2dhPsnSoZ/R7UrpDUfv4jj6WthOeLIB19W5gXXuHkN8XWJfvEu/f41N5gKyq3oPfq1TulPDhUoSKkR7zXRXP8z8LZKziMfkXJ8fopZiCsQqWu1GSpRD1IPTI5aXHFfTxiCjwDwXcd6h3+1gfx2h2ijQV5MS3z3nul9PLu9pY+mAUIEI6RdLIEkAtxGyRHhzzS1b/dJQ6TUapbTK9IHsRD6c39KGb9xkMZ9RY4rm6Rnjratrqg5g53X3JVC7hraR6KHgbEqQy7BR4jjdTb1e1zjEukAMLYLDiIt7UyQ1q1KWqD3gRkQq4klRnrQiMb1BgX1eF+xJn/YeS1ZQgxWxlySdffQM9e5k81etHGPcmCa252zUyGPI8XVm93bdqRGxKlezD2jN45ZzO4DZq5LPODxx7nUjvjx7E9z/O94NSuowPL5CHoaUC72eo0GhtqK6a5/cXNdxTBWoCdnUyrGBe8o/VK96tiiIeYB67Taqn8WpzgkaAj6oRuEREr+OeZPfO5xrVDIkVJUuPS2FdoLB64QBz0EHvxIFqZH5d5fsPdVyoRV08h/MQNWNTSedlvGRsoWzAY/Gf5Pt2jlQuZFw259kl/Eeu/IAAnggYdi/Z/P5xyayUoMFaow+Pp/URVVT9jNEIVecCPz6Q8oN0km9sPzYapXxPssLZGA/Skwn3QMj8fBjzwxNZC6iBWsbz+NF3C2yAQ20PNigguthL4rKwoYiatREyWMbWJrxHltBzknHO4FTrnZpH8E7b/H/IBPHbpwJMNA/YvP4h7wfypoUCGIQ2U89wtZAG4IGFwuWVC/bwQJrHwcSXBqOgaPaogAY5HF/Xko15eEDjD46MmxPSfS+PY59Ho12oQfrJ9laT8l/dF7GiIUhFvY/YIbI32V2Ccwu9Y1hZTK+WxPpF4XJ+0Tb+/+QqTwqcTX/WdJvTP2SExClk9IEeupEnV6muxklWJNte0geiHrcXPHoVsigb0dudA1xqMPQfJxsv6rpCFAXPrFGlqQnoHHUJG3t8dO2v9sWvtp/KjkCtF+mM7Edspwwmu09QuP9vYgf68qld0F3VO22b3l8ICxfO6XboziB3CH8vClyYR0j1UlLXJ2a4SNLtCo1USnQmf8t06SWn2LfzAPSqo8nGeXqgdYjoWwp1Y9/oY9MXwC73le2fFgtSo3aR8ExZqwhvStx9ZB79g0gdCSghOEESJJRBusUk2+zeinhwWBwixaTzrETOI98Hq+hhZ4/GGUPgD4n/XPDQ6KBeva9Nh15SQnYMoCN0cP+MLNrTN8A4txQuquHG5Ae9t3wau7OLZVf4eBQeIGF7sKDu71nS8YOGeR6SewVscCNI5ykkiVJQ4IC09AR/NGbbmdenQTmcdP3Pogf8eNNRo4Ju7qslcp7BUz9IDWfTXeXyoIShwlyPzEmDOq+NPI8R/bX+k4COcf+fLFlzRJ9Avvw5toe8ZGUcEDASAj2dQTp2NPXtSXK37CKc9aD/9Ry5jIpDxeoUGmNEKbcQ7G+S5c/b/M0oCFluTbj2URR/hRmrJRem/p38LKtxcolFsbyy0IRiVNlNuAo5Yej4zJ9ezMkLCegYqRtItZw1kJ43l+oh8YiRHheKIntD4erJU9cZzGA7wLH1GOnauCvg/g2Owba5G00/OaeM0CeKXV+3eWvUg9OLbN2vRhx2ZmYy24A48nGJGlSmKz+CXikdAunrRMIH9vyexoaeQXcmcsfdot8bCguJ9cDyWROybiA9odZvFOm4jyO4X7YQzrR6pHeukerjA8b1Hbaxm1TumiUeso/bfDXJzrAYyZpHGHsHsULzlgpSSti42WEkD7LIh1f5WiO6oXAl2XjREK+jp7V4XiIPYVCMLxjBxrjJ9pPXdNjFAt2Ll5OO+XrJt7gae/puUgfCYAlbHxQUyO0dYZu6Sbm7mfDW7HrAWhpb4/KqzlPeAK3skWJNsHwUBvYkelAeIZZG51uQmjhTwH34CNl4b/JwkWMt9ktkLYJeeelIexTF/dNsT3nt9RAiMrkjqRPnecmXwh9Rp28J5+VtidcvJggWEWvOVUmBDw6BcyztIwkqPRxg/zRD1ZsMF47GkmgWaaQPfuUTJysF1Nncwself6aHcW0naTCvob5xlYh7FH2VPrd95ZUifdcAekKHb0Yylg9zNLTROuBawjkBccRBkjhwyRgFb/OCpkDzNxBaPtoM2pIEufmtclznoFS+VCxFx3f49zoJw5BUKpZ08qbpwrucI2F7D3TTRw7TWj6gwjEhDzuFtE4Yc7HruJDa9oTtK6/yRgAHECKedxGO9QcJV/vSHPBQZ6TRrqRVBA02F6PgLZUjHkWTtXmIrdQDYY+30qR/jmsc3N3XWJQqmBfmKMknP7eDpiKYHvwKWPy6B9Ydaoi+JxozWJo2qfBBNTIB3SJSuENO5/BA21vebZKBAc7eQ4QvXQ4Ogr45rFk4Yc4n1P1kCcdOGBWHiNUulOM5qqVpBGXdRJuTkmke87r05lIvveUfh5NPnayTg277iDX7DGHUnBThQbkz2Z6EYb5CC8eCJmlDE9AtHnwHSn7FvOj7MsX2mHdWwm6e9YR98CXhWPNoZLys2n1sc3GVcHWHbzHOtk1ctuIRan/L5qKsi2+tHNZ2jWRMO/b4CC9PSpbXHwugjLQOy/4F51rXCPo7jmzcYHZrCRsUUosuSeCM+Vkj+DPlaGvgofam7THvkYETxG96Mwh3niIcKxqito+4XjGnpxI66CdIVlOVPFDDcLtt4rKNaaNvLU8QKVoq8tqeRT0mU23+owjmuX9E7+phYil1ISKVR0icWq0hZGN/TsqvZWqra/7nBPR6vvihGK40nWWI7TPv8ro6ZHyCMV3u7QDjbApwxLxDuJcHSL71tN6AA/cF28AmgQVsN3NFXNftdJNa991iembmF2v4GYpoY74I+ptZvZlMY79VyqPghQGANLJvhd9DfqNwUKADO5lTKEh0azvPekLBN1u6HNjlVoy4Vo8ijGyOjHRGR8HCGnq2TWwSUsD33yHSmoZhsLtkRVo29/HlMn0AhsS+ZsQEIRPYO9IenZPwATmozDGsI5y54fXlIfHX3d0Hlkxk3lKTa8RvM7q5Cffo1AAPrcaASMtrZOP/UR/whQFek9+QLbAXzXNdMV3dJ2TfdFXEkCHYdT6ydZCboHhx9YD6RX7yMJtn74Kc71iUjug1wETggShBOXz6yyQSgXtBDX4mIId/qO037zJW/Ha0RyrtxYTjPDHSOoWTi42y/y5puiF2ctiMzNhHyK+PGRgVeTHRaO9esu86KdJ67ipWmMwgVwaMgqyRQNoL5DvJcpYfVe/kYMnyqo9X+YeT05yc6+RyJ3dKVsj/unqIv4sY5YFnbfuI986aOj6mc3PTEr8d6Q8PJ7D+RkvYRpKV4Egx5k3fgl5kG3vW07bC16IB6YRtAq9POGKeJRv3F3r3FQoHkR0E6JSKYmU0SbL+GuUXJ12iFyTT5kEO5e4R1jKKzq+2i41CPpMwubqthLuXAPbgq+ql+5umvrSX5gvzW+ml2l5THxZz0svJjvpQuVUfJt8EWt/3S9xmkn2Ei0Dg6xKN9U76uGY/YyZIRnnLil52vweREwI49N4nGyMcjJ0Dr0+0DPiJLEILB1ZbKRjOIvTazKve04vtQClLbpMstxpGz3tE3wXv6t8Dr2MYcPtJuh3pf1avPh7gH6kB8an+WYpNQnFgnin+0+5Y6SF/18fBCRKmQLCNPkzQkRfNuK6TjC7XxyX5XQDPaXM4hkx3OC8Xauab2+ljkH0/fqGea2bUOBkRaPxTdU3j/ERaEogVnnbymEauHtYMC0QbwXz2iv69T/S8TTn9+3bPRmo7dX4wjRH3Y8i0QtwxD5GNGZH0xYv2+GhLuLiekD+LlbvpwWCPi+ZlWJ0LFJ7nr8i84csFXsvLS1rUyHiUgRnseif9nGzpZFWN/i2qsqQanNuo138YmV5LcSb4Ln5dVg0LRmrufSUeBXEbnVuk0F6kF1RL85Vvlrjc+qKRWrZaiU7NODj2Eq60scbW4X6SX6PBchxG53hy3HysDwlEv4+VLJVwdbUfFpAsnWZWXePtVGbWiPlsdZx2S+gZjLMYFN+XOnlGz5tU6L5f1fH4xH7CxQSFu3P9gGtzE+Fi/4LD40ApIGbVjcu0ga6t4zVtpROfogc4przkZOk6et2UbM7GOOkScB13JHxINybj9WLbWOekdZnjxAV5rl66KdQj7eBZ132Ek/3qRsmvK20rdT7sJllxbzmpLXjQrhn5e9EI7z5Cz3FTNUsbJLDnEA07XsIz0PnC5i2I4P2mkQpEM07Xx8JS+pAIQXLSSZ0ee2qGwWfka+DjANGBv2hknim6Hsogb696ZtLp48JDoe0VuLTeJZvskxsI1aZQ8JdnaG6VenN2INk3PilhG2DB8PpvAhcDyAGW8eCdbK06v0v4WDrqy/WeUwJOJRwjdMCS8oLoMWpPrijRWBqSg8EKj/QrZDoc3MT3oq/NKPJ9NlUdE7MU0P5AlAOZECBy2F3P0DwaKuLhjOyC8yVj+mNcB5MDOBQw12ykQBcGenBi7r4h0+cmUlD0lKz4jqlYea8GvnNdSSv1JJZ82EgochDZd94g4VICcIkx02HCOL1bIxe+D8wafbBPIR4/cuu7ehovY8pobe3HymRne1tdc5c3cXbiUbxCDt+2qHD1gYBH9ZBGvhW0pk+Q3wP4/uv0PEgJWKM3NzGmcZKlVW2r53wbku/Gd6CmcSThWkDUeYsAYx5ANs4QfcXaquOGjU1yZikoegtXpT9y+zZoZGGcK8ZuVL/XwvaJGGmnB1q/eNT8Q/g6ldY1TI+TsIwd8ModSfwIgfdya09jRTrEC4RjnKTGPiMQ3VjHyT31ooQ4S8/OyahDfj4TjTKcBJs38J2dNYLHfu+AwSzVzsh9653fv6phf4RkNRxtiL+9u4QrpK/kMRqCcXIt4ap/GhtgzcMZw1RfOF6jr4XFAWSHK9g7lm3kW0FLOdoeHv9jrdm/kagCjDQ2/uq+AS+AccTRqR0kTjEoHiGnCG861rmexokL5x3C8SEvnb1IcFY1TGpTiUDYsFRO3wKPNlMdT0MRrJnUccKe4oizPmV2nB7qTIMjFKm6ezqZJ6HvX0v4SDFCnEUobH+ZbM+u4tmZOZjsThkg/GQSFeFMso3zdjOv2r3JIjaMhYZg/fgPmQc8RA4jNuYgUh2N1+hiTMBbewfpfDwtfnpMwGCeSDrGN2RGIghWgOkHaVlHS5gc6lLQj0x3eIwtUuf7aim9p5DfBf+WfFLofD+M0aQW0fyaBL+/jTpYmNbFEQHGiT1xHpmB7pPgZCkyZyaigPNLgYGNczPZxgG/f1NFdDBi7q3ixwe8hqAu7NBMGJGpXubLQJckoh8TCHUEb9jmOe1psJW8TzgnH3vytrOt7foyXPhqQRqLmHXI8fdfQKY3NDabrc73gUWQne0IxtLaBbFFUvfyojs1U0rhkYHGuYVw9Ug52ePjCo1jWbKBUIqwkxQcYDZgS9W5voTDCJv9c6m+xwc2xzUleIl6kx0S72lUxrc35hThy80GB/8+OXqWW6lnm42mFutxMw/j+6tkrCDshmF/8Vd4XzQgcnsPmc7ulD8jyuiGPoZ8jeH+28qWEg2QnsREhHJ4oHGCCIApBfYW8cOwuLBkTV2ZzqNZi75pFhS+fOpTS4zcIHVsmlTXAwSRn3lLmB+2up7n6nkXfR2Eb5PpByHhs9W7nCcQtn2DcP0e7WFsq+kjj32v4mxCkeRg9VJ3FkMt4EBhYw86T78NaVhPk6+t73J2chj+P2YSrsyM/QONE8b+DUTjRE2Kj/4YhwlPo8nP1cleeCwvXOkM0/RgLfXF+loVPT6Q2rFoiXNzFtm33yZ++0AA+xJ6+VFAyVI82Z/wgX6FB6OpVwIRkIZ43GHUniAZ+1NNlRtrMPLHk+noUH0k3kK+lsBidqyk02iwWoCsjetI1gicj7sEHOteRMY6Unsrrbubh8ghMl2dVm2rYdOgMJiNgnejMr5/F/1viv74QGi3VCq2pnjV85JzPK9bpA6yNaZEncu6RHt7WeHr2vyoVF53sKKk3Q8IdL3Pq5Ogt0byqs2Y/KuU16k9BgVvHydnEDo16n/nIMm3dsfQ+APkepJ1gj4gIWsQ0QTyE6IH+YYVjmcPnTMWEqbFq2XT7CdcqTow4pYr0xC9veCPj/fKDMcxUvAe4nndwgvO1Kl0uj6ymLwWSAm4i2wdgLFn7grHBW/XxILsbVye6AIN5jIUjSJVa/4q8H5tJVzUtohQIa2EmfEK0cyrxFL5WIFGcfcSrec1A44VD+AHie7eQysYC/bTk0QPxwOradOcQXbIjpHyacdWIfT0+hJ4GTYtcz4wf0wUvDA0tvS8bgeS6Qnz3Y1wfx9C5mD4SLJePpWAtQ+ILwKDMepUQb3MOpLVfBWNB/4wsnn/Tfh7fcC47WJ2foujE3jUt1PHTHvJmDY76v+21wdEO/17LdlvMGRfIlkrn0p4OvBjiO6WS6Tlqb3byIzNWfOUx8VPPUsSQCH3TWSH7HA9FMo9XE6S4hWkI0Vh1xZsrJ4aSSpqh2gc9M+RRT8GCmdB6GrCVS/xtWQMQ5VgVjL9h36QoGkgmO/2lCz1oQjpN+dWif7yqP+rJrTSxwNy+JfS8w40sfvoAx4O1oslq824U732j+t8PqPnCLIFnnbyhP77OzTShIg2msD11Z+5ijpPOkvDndmhH5YeEm9LaWQ1ld4tLLTDj0vTrRsaA2zNoURRq02qafN2FD62jxtb6H2A1//FAl04P6iXsE0L5gKLmImCF8WmixT04INMEN7mc/MJF50oUlwqrZPBnrhBqs8I/U0jvQ9I1mRshRZeunmjrRqD9rAovbllDzG0Vu8watu21AfGECfDJEvt/Fgf7D979sxP1585WR8YsDNuVqfnNvo9YHhcg8jZ80QLHLnlosbJCJLxIgNhwRaMYQPJGOUYxnClRuGqBujLMJbssD29gvFsJ/xda0vNAzylgsW4v3Cl3YwUv6w/R5GN79IWPhRjAN7yR8jWto/iyP5mmP5B1QiP7SEaGUmlkL0zkeGSQv3fWlX86JhTHU4HO7lWMsrVz4gcbL/o9yCK8pjwMEPdIOHTNhF9GkQyXjgke5X5/TOpw5vFSVt1TgZ0TGaj4O1bobGVumcUB9hFUlkDmn+Sjele8dcXAz+HqYEZIlUbEu9xXBJXkO3xPh7GhTmvBva7Uj20E9Uru73w1wmA9esD01tJefybS3WhlXqyt3ZyoZNX1LicbuuhLDktkr7A4sdQPwG7aecyv70Xif2Lbx8gxavzaxYbCU/xTS0jzMYVjqmnZCkxqRoSMCLmqGD8jHU9F3pcswsLV4H9SPXSMeM0svWwm6fo7RgxQ6O+wDP8qpPjhJfKcWXJaoFMX017dPeQ6mk0WKP2CJxvbwtXCnGKdsS+kfQ2v/A0Ay7n0YU00ItJvhvEBfNVY3izr3AVbn/lIQyFA7s/USi0HHlYDatKgMjJM2TjOsrjml2fzPM9OAEjoR/ZetjLw5hwgVxlxkazjIJgqpmXbD1uJvyMU3lHVY+U6mhEBocS0qtQFD7FdE/jyC3H4Xk1ybjBHFhqGupfhIPKHbbMjlKlYPOMjvVggANgxHg2sUMDOdE+aFzhkXiXaFx4CG7vcc0eSeZt3iqBfc7W62dvT+NCIepPYgZHcylvz6nRz2LQHmR6aVLe8XQPMgOMUUg7GS3FY69kcOQuH1GXYOpkaN75mpSWPYJUpzNJ7kSQcXSUKgSUwFYv8YxHZSB39rtEDgwcwit5GndP4aLghQ7W9LhmryEa24dOlkhgr+9Jdsnv4WlcSH17wQyOkgRNO0FJOhfBejzb9NGsY2P3gtodaEJ6uJO3TM/B5N3ID1g4Tj8iGDdqppYp4XtxZzOkcYNEZPVqjX7MomFPpo1zs/hjEwKD1BUJHBZgP1jXo143Eq782YkejfTZhKv/w5OJeC/YHiA7exzb/iTet1QILu6VfBtmIgpzq+mipLOlpkD2BlJj0FD3aduvURy5nSLqFrbWUJKHe3N9NGpT9PO+D6erI6aNVCmYiodq5UzPYwQ/9/vEB8UXkrF9+ARbus3r4q9Iu6s+2FjGVkn31ZjYl2hNwAje1rNHtVqaEvoS9DFYOae12Mn0VXIe/7ZSDMDWQFO/SabXKIIHfmxGpcMJ7hj8/iOa+U5Eht4k0BEigItJFWM54UrVma7eTJ9opQuSseBxsmTdWn0fFGeQjRN9Ctp7GhtbV+/DE9nrhxDNGbxUvT2PD4/4783wKEtwCa+aw1qEAfCezX/JZ+eskjbW0KiH0ejGk0E56JmF2W5IMzbVAQQRuF/0O6oaGwoXBe9PAQwTUe/7E4TerWPFf1Eownk3ko31co/j20Z4wvd41G6ZyF4/jmg94KGwtufxIQXgIjNyWlS0Gbv5Fbq3f2VzX5KAFWoTSRO423YRroh1tciBOegb6dEM7JtNpUWj/o2hZhANK2ev9gcIvO9MeeF4PYdibtiIKPwLw/UsyZom+kZH9TYxHYYDPI7vUKJxfasRmRRwFtG8faVGqG8sKHz00ynIU5JRocbCJmI9HsqlFm0vaQEOgaP0jDQdxo8w59W88nSC8b/XxHm2M8HZgz2xsRjkFLKNA+rBhQKNtR2JhxQPvivUWxAC8+k8MlGA7uJxfEzpZWDcWDqBfY5wNFO/DLClLBporEgpelfMCCk39fVaiZfqs7/NeVkyKUDEMCTgWDtJuHo1VRvb3Uo56X4DyXrY5M26uXojEZphBPqB/TdTtT8+YJRcR7Zxng18CYL5ZWzOY7xLsh4loYAI0hdEOkUKgS+GL9TzXE40tg8kDa5+eE8fJJq3f0tWOB4KYNr52AyRsr2mh0gcQoUzbb7Llmuk9AZreUc+ThSu1O5qkw8iRzTrooue73k7PRvqM7UNwaMY6Yh/sdhHRsH7JNnGAXNDaEoyFP78ktP4MN+LBB7fhsKV3oAoQXdPY0NO8e1EYxsd2JD2BdRAvUE0b4/p+RMKMKLR+PITM0bKknESvh4E5/tNNtctYktclfycaaOP2B9MX7kKGhrX5OjYHkIwB+fVc6bAsf1Qzt8E9sfjJQ3WzOBAqg5bI6CzIoy7JqeF+IpklMCh0Ve4CnHf8hjx6UBwiNTXaQqFZN3JjPFrIhzC+PlbqVFtRglPegAMgadtnlskFwl3zwDsNyMXyF/uFv/kNuVgB8mfdfR+jcbVAjXAebMkvqh2t0GNYaZUHRjNsZgb1o18UKImI1ax8ulkh6FPbzeb8fKipNEoDEW/PxHN24kRx/43JyPNKCmLICBkZ162GrWUZKLEZywrFaD0H2M6opB/5bwWFiNw/LxexznYVp1eeX4PUr92tGfHn9hAuIrEkDa0WaSxY0GeEylSgEsjFuMBvGM3kB2G13n0dqOIbATR2PIMdZeD/kRzBgrlPpHHv4Suw5/EjJNS5OKAnna2GrXUBFkCrcnOF5zLdyY0hz9oRHi0OrQecHKHk1tUkOY7VJ1nOONRN4pU4imSBs133r2pZiJYD3gA1RKdLOXkw5y/B/PR0Z4df2Iv4aLgBXPDChHHj8U5KvCYQCu8k8TL+cMCH052GJ7icXww9l8hGtvLwp+C1U4vVyaq7Tw6cGNv7KNGhxmyTcv7Eq5D74b2EKxYN93IzpiDJL+6ylJ7bo1SL/jBTtZToxT1e50kS9Vpo/d0a/1nGNGz6J0zr2Rsh8ic2FsjDLhnPyd8kCD1aRuSNZGnfQnd1BZ77ytZ/UWe37K6GGbAQLKN8x8JR8Hb1CMs1GU4RQ+7mDm780n+LF/10+r29vwAeY1ofCkUoS+se4tlzmAIzJPjfCwuWZqi1YY0HaXaI9D87yPWLLJShp8ThaeQFY8h1pQ6ZB9cKVlmxXyeI0dIB+6hd/xTORu49XtM9CJYF3Amf5mzo2tF1fnNOdtAg4S7dis6cHhdS3ZYPK/eiJjA77s3wFiQTvYPic/13ENf20yep408P0BeJRrfuBwezeVia+FiRUN6Q1uC86+77tHXxJriNZY6GeLSPM3mtmJ5W/KjWa0LrI/BhA/KLzRK0SOS4beO8DB/IdVoUYK1gQdaniyreID0VAdhnlHvtwJGk5MF2ISeIDs08jJM1nDymcdxwBNyvuST77eBcKU3fCl+iyY7O3mJ7KJj5vTG5TuEbJ8fQzZHSK/YTjJq2I/MOz9DrxbfkSp4I6+3ufVyx/Qj2Duo52HqtzNdjd51InuckfL0K8kcIC14DpKz9aQc5+FTvZtBXT0pp29AWuIB9txo+NJly4UelKORhu7a0zwdgCgCz6suYB/hqutBR2qftHOIWD1DND6QOKxPvM/hCWNKv/pejQNGoFZmGSeHSdYt9+sqN3JRk7eK5znuKHy9p1KV1/Qezwut9c5mmQ8Ye5dJPjSnhxM5LkA/y9Jlex3Jj/oW2RfPSZYxkZdNNEzSoOmPDqQfMKXqYPMenON8LCR+agsekHx5ntnSG54Wv2l1iNw9TLZu9yXe56C1nko0X29KvvUf5RjK8JwNkCy/+5sq9bLv4Hle0SXZqFr9FRvvl+MeWUQdTCxzca7ET+GuxWCidXEJ0Tk6l3DVbMauxdlYDA3i78LVrRQ52JvnPCc7qrd4fAvlEcnoPvMCIjls6Q23iN/CP6To3UY2xguEs7PpHOoBYpqrIcJHIVpK1O2vTo7VPf6ZcEUZQ0p/z3O5nPhNd612Qd3knDnti31InBtwAiF9snNO89BW7zlLcW04SnZhle5NNHSd2Z4aDWMPsksUOXor5jwnSMHoKhlLzmJlyuI5XgS1mEW9tWyc9b5xWcGjPL6wm3AVVyNFYtvEz03ssb9o1OsG9eb/t8CX6IUBHF9Fnq88HHc757APYFjdQzIHKPLNk5YY0VKWtOCpwtfsbhupPpKP8cJdG5o7TiJT2HvCweqRMuYVvvSGEJ3tTyEbIwrRe5KtBaS6jCCbJ6zNBQu03xBxXECyLvNnarRpkhTrIoVn2Wd0b89Eo0cvCFf/obqCZnmzRV776IkxkcTgPtju3Rlq7NYiOycXUfuumlJXjxPOrIimMJOeI130np5fneodxHPWAibmajKljSD1IqcEvLiZ6npCpdX1FS6mIhhUhxOtA+zv/sJV+wG5SNJLvyoHNU5Wkz/rRorwGAFFuU9mwoEJzgEelmhat4twNtsDEcZWkdf6rsLR9+ItdQLkiWWFJ60Q3d2XJDsXkVlyi1TPA+RFybcOuFTgsbGSZNF8pJGDvAAMoyCnGquP6tclIw25Sm0cNFOsONWxg3pNmJR2h+TfGyB1sFHwonA3RMfrjYUvpPtkDl7IxoDi6Y/I5geeufWraC9iLYDe+1T1nKeadvSg+Mtjbk3o+CrFMbasfj88g6+SfudQydIDYzk4LiYZ94UETo0Nifb3G8LZGLev8DRqDO0M2IH4XsLeRfTyaHWSfSXlRaThVBvu5FCpIJsBB+koMsUNtvdDxdhbuNIbPpAwTfrYIj0QdL3flGANgHXkYcKD+SmiB1pswCDY0smNkl4B9kMeHyCMjq+mZKTM2MMIl/cxwplC9p0awrEe188SjJml3uEo4YnIPyKchc/VQj4BR3pH0nsIDw/QZo/zMM5pGh3ZqyXjXZpsMUzXF5WhMpxK6D2sCWRkv0l4+NwnWffXvICL52xCTxMMhf1se/6RirCSem2/SuRCvU+/29dDbHQi40akY4UGxrCkOlYYv/mWSMYnmB4ZIqwh+tSUC+TN30W0Bq4QztoDROceLfjjA07R1QnnHqUNqJN6J8CYkXFzrWTkTSVjXeGi4P1FPYSGlqONLgSmDXm3hEmra6eeBrYDCGH43XLU/yFk+7puR+0YedqzC08DrqbQVr3VLydwqd4u/lJc0OTxkwTG/Lo+FBvbZ+eRfjcM8jUjrF8W+2GCZAyUeQJrmqkT/AnE597xwlW76duJPkj4yghQu3arhK9dG65RrpKwu3CFkdGwZWUxVOphYOsw/K+A4x1AehDBw7t0ZN3DQNxLOJvl4Zw5JoJXDpEn9MC5mMAoKRWoLWBlVqqVKz2Odx3JcqSZx4vH8qrNjAP//ktifbULvG53JzEk0bNr/hz3bys1qqcRnbW7EZ93eBxPLugDZDThvbO2xK1ZG1Gq7XMimfLeLzeEY/h/ABXg22R6DckMtZHwFvYiJB+rJwyMjf2dfE18MC8SYR52kj8JGN6UrM9RCqx6iPxOIb5Yz/A41l2Fm4IXa3W1EsaBNCdWVp/Pmoje+PRks1D350nrvSjZnYuo1HrEZx0a444s4OPjF72DmbCp2tV51CDN29yr/SoyBYK2rFoLVH2BrcjrVwnbdA7F7e+SHkiowUCzxJrAOkfKEep+vieeh36RHt8vyv/PTb1Hve7tiPctLuXXiC9Xnz0WTiAe5xgpL31pU+FMd4ScL1mqWCicTzJOpPN1z2nfItXmbOFKKfo8x/koNWJ0bgEfIMP0LmZBbycf5hiFO0eaSIVurxPG5jE2Ct7KwNZheHKJ3sRKPP83ER9KKLy+JqCHDsWXQ4Wv10d9x0KXCJfasdJ44T2KvYdIluLJ2IME5/HjxJ69zT3q6QrScaI4829ljgcOsydIxwPjY9mAa/Z6knHivtswp32LyCVbyuvo5rzPBNhcuFoF+Cgf2IhofmFzvUcwJxs39oHzSJbnyqTEc+39UDH2Eq70BrCkLBZhzMzc4vCOPa2PQ18PbMzpQOHr89FQOkAMPnR4/EoJNcNbeqE+3JicHfCcsdaBoM6hh8eHFiM9NC7rdVs4JtCe/0p67pwe6MHdVrhYnwbmsGdXEp7O53UFD+IO5HYKHHJjC/QAuVx4iE+6SlaHwULf3mAKNKriPyU7LA8XQ6U4mWxjovgpdB0E6CDHJ3BIwQuPlCxQ9LWkWRg2ci8nZ+rhnQKTyE0SvjEaomAXlfldSFO4Vr1WDGmfSPth7ZgONqi5PI1zLkLHF+h0K2mOiW7Hb5LqDgXaiwdYr6h/uZ9onC+rUzUWlpesWzSjzq8TTgre+g/Y66UYjw/YHn8hmVc8PJkizHBA9m7oQ9cRrqJHhPm3tvdDRYCn6xqyzflABM9AW+GjHm5KvlbPwDFq+KCnAHojdNZHxmz6aFtQvWyooUER8FPCW2TemGHXI8K6X1ta3k8DZyBSn1Dj0E3yqROBvm8l1iMaJ/qqJYDjayLZ+I6rcEww9gaQOgSm6fh8G6SIZD1INE5EoGL1EFtLuOu1TknEXtlTuFOHS61vDLG/Woodha8m7UppINtgV+FKW5kszdMeGpp//bLlI18aaeybCT+1Z0OCbwZ//CgnL0iWqvW8ep0/UMM6xUMa+b0HSBza3XvETwR2gpObJaMXXUqNrNCA1/YCCc/PXokBe5Bn443J8TXVk+NraV0/jDrE2bJQwSMgtZ7o1QPfr3sLd7Qd59g+idgr3YWrd0pL6xvnI5nPeUmjckhT7Fr/Y9n6J8DYWtTeEBUBhb5vkem1f6Sx16jx/rsJhdwgcbrBg3bXN+kCHDMfafQOjE0b6tnU0fNlgdqY4cJNSYv6jxU964vJ8YVCyV4exoUI0UXC66X1HR1gqwGpFUQmQnRFR4rNNQk4uXAWMhVDNxdFeyDhO+5HiVPfWCoOJnVWwuG0Zf2PZWMiAS90Z3tDVAQwnjBR8P6mBkcs9JX0Q7pFEBgBS0Ty+LwY6aIZr9FF1PD0U685mEa6qQcMKXOz6SNlFpVZ9WHcRecD3n8QJlzi5A0nPyegy2GeH17HkY3vQ4+OrzWEN0XyZfHPRHcN6VhRH9dHozSVANFbpMee5GRcImfvV8JTj1AKjpJ0u6Lf4flsrASgcX+BOCo3sP7L8xGyj0QaRTsxVIL1hIuCF30p1o4cAXrZHgC5N0CLQYnZHO1ujNQdeM/BqgX6VpAtPOvkSSePqQzXBxKalCHV4LvELltEZg7zrLNLCQ3zOTx6dO8k1SVqJPb2vAcHEa/d7zUKu26ZkVjUUSItcgPJ2PLeT+z8xeNrgYRslr8KL/lGcyQmqxHNY2/y6NzNdT8WBa9vkn3gv+z9UDH2FK50jk/VQxwT+wpvPn3RBQfgQRKnz0aptLsmLZdxnvcvPNJsKRdDxS9JxlZkTqC68ozHxxZwcAJr+Ft1CqAwexvJ6kwR1VhEpZv+GfpSHK5RHUQnf0h0zz4jcVJffQFZL88nNsfT9fHdhmQO4dg5n3zOnqr7wd3Uc8ek0H5iqBQDyRbdmxKXGrE2FPmEmPGYR0TgLKk87aEUtIR216R8Od/zJYu9+TrZGC/yvDZrhLcWDcQQPnPWe0tazeR+VW87orRIvftI/xl/9nNB9uwtwtlotSnj+Z+JzTEaPTLVK9dInFTkSkss/oe1NUTJdDBsa++HioBD52qyRYf88fY5zEVv9XyZERkvVedqiVfDVQntrknp0csVPettSTX8mMZ5VID1ub/w1qIh9bqTp3EuTebINMmM+dSwsaTDYPmL7m8moObnc/J5e7XuB+8sfBS8f7U3REUAReDjZIvuasmHH3sm9WxOtwspSvQSee9dIukW6QX32rwH1+l54j/FYHUyxxceCdsHWKMLqpeUUbdILdrc0zg7iTEPsu3bAxO0XUDi8VYiczxMIw5M2CyBCN4LdT+YjYkEDDOL2RuiInQhvPT+keN8IET6ml1KUXLoYxY9hqDdNZlRUFS/VADd9SGLDMDxtUaAccLpcjKxA+RudVj5wCDbL1QpdptLeoCj48oE5hdZFYwUxwck4Gx9sO4HDyH7uFcIX5WpYRnJ0iaY0nL2IPAMfG0XUzBvGx4fC0XUZyza3WqWn/VCC4FjyMaKjuyLBxrrcsLX8b3uw+vvnsa5kaRbsF00QS3LipImdhF+Cv3LxS9hhS8MSGBtXlz7sSgSfYjs4+4lVWxKAN0gUx4lvmWDnOekrW7OX+1y8v64vC1y5CNv2t1qEei1UyD9XUg2VkRI5wx49gwh1vMN4ocwYk5zCtAIWAEXTtR+YawPq88IuBzp3J1Ovi7xsPxfauBcktHMMX3gBZJPrUCRsAeZcfaFZI0R8waaw10rVg/i8zBBE9O5I+vRaHfjsLt0D6S/mTRixjTeByQsaxvIEljJMEDi4KuPwbHCRf9erTJC77sUMbPw1vbBrupPbKOeQb4uv6x71qAj78dkH3iUGCrFP8h0Okay4jIGwFP/iF1QXgpYT8/hkqul3bVHZDgBi8qmAXVYIxkTCtOYLwu8bjsQPrrqj7+th3Eije0/todyl7s86TMvHEZ6xiPCNy/xvJ1Ivi7RoHf22o9dS/iYSLaz90NFAAXvVWSLbriTjkRzhKLa5+2SarGAL/8AidPnoyFPstHuhhPcB/tL2P4BIBkZTzbu/hHWLli2WHtlgEK3p4cxwjN8gkVB5DvJyAfuzun3n5u4HbMy4TmPVPI+5PN2ILFzDt91Ut2P3UG4UnVw+fWyN0RFQK+Nx8gW3k3C1xCph2QNcczoLE/edLKJ5BOCNtrd8Bdsf40yhQRo1icTjRt34E4R1i+aL75ArP/Bns5pUA+/UsX7COsJPTjA6ISO63nUHR6euB3DSOt8u5NZyOeNmYYXjssV6n7ssWQfOEHCMZFUC9BtfBSZXs8gnase5AYBW70Hwvrdc9SX0e6GTak7QeI0C83LKGvK8bV2pDV8iPCSJyAqtbTHaM/3VbqXbtPHZm20PTYD2i+6x1IGHFynkhnPqyUwb2wMqHXlyvrOrUvJPhB5wbPbG6IidCdbgAi77Uc8X7hwHzUDtFkSATCI1eSop/mdvGS6CEbZ2U/ipdT1Ixs/0o+6RRr7Ik7Gkq4DnNUne4puYi2hgWW1pWIh+6Au+xQ85rGbAk+WYjRzXl84aJ2xL84S/81YqyVyVHvGrlL/gLif7CPvE6PgrRTrCBcFL3KeNyWfM6QM3CBG0dvQwfuMXgR5p9BtLdZjIISA7nI3iVuw+i+yOXhT4jG5wbhnZqpB48lFPY0VDXEfqqK9NLyBhyz0fWYOkawiNHOeR/cmAyPgoonMGdbbScJVB/KbOjZa11cuW57mRWIUvJVid+EK8X8jfoobQ6Ozk4HCS5WZBxMSQuAs7GVg20KB3TjTjVeqzrUj6xEOprvJ5gGseO0jzgHOQ9Y0CUQsjvF4DyMiXw21dsOaiKJtKVlaVKxveVmKkUkCg/WynPUKve2X2LytJFnWAlNUcJ76H7m08DV7OcbeDxWDjYbtPYnbIbsSwAsMFra3qtgoRcRqqGQMea1JD9ehFq2qSKboxd41p4c+WyrdlZHnAHnQ1xCvD3id5/e8Z18r6F5CbdxNzdxxaHcwIeI33SfhiSRioU/OZz3Ss2sSmzM4eViYUN+VjNHs/2F9Mm/vVOGnOEvBY3Al2QH9vKTXEAleO6RkVVPB8zQ1DJGO04lcP/DuoV/QeLHHRLmCqDfYD2fOSXd49HxANicn5DAPf5eMqpXVqD7Q83hX1IhbkfYS7KdTSjBQO0jc3lNFyiRZLMfzAvrdMNF5g9E/Mef9gSjv5o194N7Cx0Syhr0hKgLSCIaRHdJ3SBrFW/WB4kGks71RBQ+Pfzs5QnjSrUrF8nrZfiz2sCglL/xkmbFANg+sQub4mqaP7thAX6QHidcLGq75rotBitK9UozC9Nclq0srtXYqJqPT0QWyaWZSGyIPHQ+RdGuS4Yw+JkcbH6xhOzb1ED6dbEMjHWxJe0NUhLnVmGTS6zmJz2lXvTzY0hV9eDlf0YfHwgnrp40+RGBcI83jJ7HHRv2Hx9lOliPxim5J5vhCOtp6Oc3FzsLL2f+LOmB8Yy61PSYlup/QHA8kCuUWJcfqz4BzfYeC2TUH5vBoHadnZspA5skNOd052zZ339xG6FEwCt7KgLqeT8j0emgB5hUbCT1DzivAQ2SyZOkAezqZt2Drv4sauKhvGFPFjxEYOqA0B3Vyd+FKx8B5wMTQ8pnk19sGDiPmAu0nJUz+O6IGYEZ8Vnh7ojSUoXGnk3WlZYxxi0ocAo0iZpL0lLhF1ViT/aUYaWxg+IwZaYVTc51SPuxlsg3+gOSXl1wUgNGGiYIXXrStCzS/rdUrgrzfUZJOITT08JZ67nA4zFrwfYCLYwHJ8k/PlSz3/GsywzeE53Ocery218cYI84hm7fROc9VP+FNScIDfrvADoN+ejax7k1EPNABu7dU1gW7vdo4ob8Xef9FyyTBffVERJ2PKJhzDr2H7g58zqBe9lrJCBdKwodqmLDIhWIUvJViZ10ILDr9Uuo1nykQYODuKll+6kRCI+JHvdgvVyNigSreF/DioijvACfXSVbX820BHiRT1IAGo9Juevi3JdYDvu1msnvnYcmKhPMCimzHkM1JXblHsnqVkOgqGanESOGIWuIbkMo8yEkv8UfRfEIEfWEO5yrgGY65+znC/E1SB07RgGjrYPFff4c79DW9f8p6oMM7uBWRdBeDj8uMSaebVIG3HVG7ZZz0lYyOcYwahrEvTTw8kXuJ9CpEaDaSrKi8tW2LGdBaD+PVVGeXOHlKsujBd8SPkqnqjcXj6VbJCgzXS0zH+M7Vyc6oVXN2fLXWtbgVqWwY4QFS10hCxBwUomMjPkaw59GvClkh5zvZIpAHHFS9WwbW11rkToiWYsEIcwdZP2eHREi0U7v/cQ97C481lE0cLem0WTAYCg0c/AuoYYjUAoQkQUM8QT0PlaZsTdOHBgxR9FdB592r1Xu4kT5AO5gaygYeyQhTr6meHDSkvE6yBkrwhH4kWQoXokq/BXqkTNNLAR44sHqN0t8P/R4vWVFfTzXS2prKDAVGGzVqUCcCApAH9EHytRo+Ld1/03WP4ef8R7K0noud7KsP0Tls6g1VANRaIyviFnW8/VTi3pmi+xBpvjtJeqyZBkNVobVeakupZ2UvJ/+QrEj6Hn1AjFQjd4xu7jH6/1HM9axevtdLxmSERw165cCLjKJGNHWztMUwaKUPExyyIHf4mz4C+uqDALUlSH1Cbu0w1RV0+YY+Ht5Wfb6jOkWqFELVoDd92slDkkUyLnVympPD9FBHfwjUGc2vv9/0a6h2dFAHAbz7YOZCs90rJGu4h333qu6vsSpIPYV39gXdm9hn50sWNdxJHQ1dhb/fkcEQErXZG0glB8EOitVf1rtrjN5lz0iWNgu7ZQu1Oypucvl/e8hoybXS2YAAAAASdEVYdEVYSUY6T3JpZW50YXRpb24AMYRY7O8AAAAASUVORK5CYII="
             alt="Started in April 2013
             a crazy-bunch of friends get together with ideas to share and story to tell. Heavily influenced by skateboarding, surfing, and all kinds of visual arts, from then on, we continously creating and presenting new perspective through clothing and breaking down every tiniest details in the process.
             "
             data-rimg=""
             data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/files/Moskav_Logo_800x157.png?v=1591003130 1x, //cdn.shopify.com/s/files/1/1608/3005/files/Moskav_Logo_1600x314.png?v=1591003130 2x, //cdn.shopify.com/s/files/1/1608/3005/files/Moskav_Logo_2400x471.png?v=1591003130 3x, //cdn.shopify.com/s/files/1/1608/3005/files/Moskav_Logo_2408x473.png?v=1591003130 3.01x"
             srcset=""
             />
          </a>
       </h1>
       <style>
          .store-title {
          width: 130px;
          }
          @media (max-width: 960px) {
          .store-title {
          width: auto;
          }
          }
       </style>
       <nav class="full main-header--nav-compressed compress bordered">
          <ul class="main-header--nav-links">
             <li class="nav-item first">
                <a class="label" data-savepage-href="/" href="https://moskav.com/">
                Home
                </a>
             </li>
             <li class="nav-item dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="header-dropdown-shop">
                <span class="border"></span>
                <a class="label" data-savepage-href="/collections/all" href="https://moskav.com/collections/all">
                   Shop
                   <svg class="svg-icon icon-down-arrow"
                      xmlns="http://www.w3.org/2000/svg" width="924" height="545" viewBox="0 0 924 545">
                      <title>Down Arrow Icon</title>
                      <path fill="currentColor" d="M0 82L82 0l381 383L844 2l80 82-461 461-80-82L0 82z"></path>
                   </svg>
                </a>
                <ul class="dropdown-wrap primary" id="header-dropdown-shop" aria-hidden="true">
                   <li class="dropdown-item first">
                      <a data-savepage-href="/collections/sale" href="https://moskav.com/collections/sale">
                      <span class="label">MOSKAV SALE</span>
                      </a>
                   </li>
                   <li class="dropdown-item">
                      <a data-savepage-href="/collections/all" href="https://moskav.com/collections/all">
                      <span class="label">All Product</span>
                      </a>
                   </li>
                   <li class="dropdown-item">
                      <a data-savepage-href="/collections/t-shirts" href="https://moskav.com/collections/t-shirts">
                      <span class="label">Tees</span>
                      </a>
                   </li>
                   <li class="dropdown-item">
                      <a data-savepage-href="/collections/shirts" href="https://moskav.com/collections/shirts">
                      <span class="label">Shirts</span>
                      </a>
                   </li>
                   <li class="dropdown-item">
                      <a data-savepage-href="/collections/boardshorts" href="https://moskav.com/collections/boardshorts">
                      <span class="label">Boardshorts</span>
                      </a>
                   </li>
                   <li class="dropdown-item">
                      <a data-savepage-href="/collections/hoodies-sweatshirts" href="https://moskav.com/collections/hoodies-sweatshirts">
                      <span class="label">Hoodies &amp; Sweatshirts</span>
                      </a>
                   </li>
                   <li class="dropdown-item">
                      <a data-savepage-href="/collections/denim-pants" href="https://moskav.com/collections/denim-pants">
                      <span class="label">Denim &amp; Pants</span>
                      </a>
                   </li>
                   <li class="dropdown-item">
                      <a data-savepage-href="/collections/denim-jackets" href="https://moskav.com/collections/denim-jackets">
                      <span class="label">Jackets</span>
                      </a>
                   </li>
                   <li class="dropdown-item">
                      <a data-savepage-href="/collections/caps-hats" href="https://moskav.com/collections/caps-hats">
                      <span class="label">Caps</span>
                      </a>
                   </li>
                   <li class="dropdown-item">
                      <a data-savepage-href="/collections/accessories" href="https://moskav.com/collections/accessories">
                      <span class="label">Accessories</span>
                      </a>
                   </li>
                   <li class="dropdown-item last">
                      <a data-savepage-href="/collections/moskav-x-fools-golf" href="https://moskav.com/collections/moskav-x-fools-golf">
                      <span class="label">Moskav x Fools Golf</span>
                      </a>
                   </li>
                </ul>
             </li>
             <li class="nav-item">
                <a class="label" href="https://moskav.com/pages/lookbook">
                Lookbook
                </a>
             </li>
             <li class="nav-item">
                <a class="label" data-savepage-href="/pages/size-chart" href="https://moskav.com/pages/size-chart">
                Size Chart
                </a>
             </li>
             <li class="nav-item">
                <a class="label" data-savepage-href="/pages/about-us" href="https://moskav.com/pages/about-us">
                About Us
                </a>
             </li>
             <li class="nav-item last">
                <a class="label" data-savepage-href="/pages/store" href="https://moskav.com/pages/store">
                Store
                </a>
             </li>
          </ul>
       </nav>
       <div class="main-header--tools tools clearfix">
          <div class="main-header--tools-group">
             <div class="main-header--tools-left">
                <aside class="social-links">
                   <a href="https://www.facebook.com/moskavofficial" class="social-link facebook" target="_blank">
                      <svg class="svg-icon icon-facebook"
                         xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                         <title>Facebook Icon</title>
                         <path
                            fill="currentColor"
                            fill-rule="evenodd"
                            d="M30.11 0H1.76C.786 0 0 .787 0 1.76v28.35c0 .97.787 1.758 1.76 1.758H17.02v-12.34H12.87v-4.81h4.152V11.17c0-4.116 2.514-6.357 6.185-6.357 1.76 0 3.27.13 3.712.19v4.3l-2.548.002c-1.997 0-2.384.95-2.384 2.342v3.07h4.763l-.62 4.81H21.99v12.34h8.12c.972 0 1.76-.787 1.76-1.758V1.76c0-.973-.788-1.76-1.76-1.76"
                            ></path>
                      </svg>
                   </a>
                   <a href="https://instagram.com/moskavofficial" class="social-link instagram" target="_blank">
                      <svg class="svg-icon icon-instagram"
                         xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                         <title>Instagram Icon</title>
                         <g fill="currentColor" fill-rule="evenodd">
                            <path
                               d="M16 2.887c4.27 0 4.777.016 6.463.093 1.56.071 2.407.332 2.97.551.747.29 1.28.637 1.84 1.196.56.56.906 1.093 1.196 1.84.219.563.48 1.41.55 2.97.078 1.686.094 2.192.094 6.463 0 4.27-.016 4.777-.093 6.463-.071 1.56-.332 2.407-.551 2.97a4.955 4.955 0 0 1-1.196 1.84c-.56.56-1.093.906-1.84 1.196-.563.219-1.41.48-2.97.55-1.686.078-2.192.094-6.463.094s-4.777-.016-6.463-.093c-1.56-.071-2.407-.332-2.97-.551a4.955 4.955 0 0 1-1.84-1.196 4.955 4.955 0 0 1-1.196-1.84c-.219-.563-.48-1.41-.55-2.97-.078-1.686-.094-2.192-.094-6.463 0-4.27.016-4.777.093-6.463.071-1.56.332-2.407.551-2.97.29-.747.637-1.28 1.196-1.84a4.956 4.956 0 0 1 1.84-1.196c.563-.219 1.41-.48 2.97-.55 1.686-.078 2.192-.094 6.463-.094m0-2.882c-4.344 0-4.889.018-6.595.096C7.703.18 6.54.45 5.523.845A7.84 7.84 0 0 0 2.69 2.69 7.84 7.84 0 0 0 .845 5.523C.449 6.54.179 7.703.1 9.405.023 11.111.005 11.656.005 16c0 4.344.018 4.889.096 6.595.078 1.702.348 2.865.744 3.882A7.84 7.84 0 0 0 2.69 29.31a7.84 7.84 0 0 0 2.833 1.845c1.017.396 2.18.666 3.882.744 1.706.078 2.251.096 6.595.096 4.344 0 4.889-.018 6.595-.096 1.702-.078 2.865-.348 3.882-.744a7.84 7.84 0 0 0 2.833-1.845 7.84 7.84 0 0 0 1.845-2.833c.396-1.017.666-2.18.744-3.882.078-1.706.096-2.251.096-6.595 0-4.344-.018-4.889-.096-6.595-.078-1.702-.348-2.865-.744-3.882A7.84 7.84 0 0 0 29.31 2.69 7.84 7.84 0 0 0 26.477.845C25.46.449 24.297.179 22.595.1 20.889.023 20.344.005 16 .005"
                               ></path>
                            <path
                               d="M16 7.786a8.214 8.214 0 1 0 0 16.428 8.214 8.214 0 0 0 0-16.428zm0 13.546a5.332 5.332 0 1 1 0-10.664 5.332 5.332 0 0 1 0 10.664zM26.458 7.462a1.92 1.92 0 1 1-3.84 0 1.92 1.92 0 0 1 3.84 0"
                               ></path>
                         </g>
                      </svg>
                   </a>
                </aside>
<script>

var kijang2 = "kijang_2";
console.log(kijang2);


</script>
                <div class="tool-container">
                   <div id="coin-container"></div>
                   <a class="menu" href="#" onClick="doingnothing(event)" aria-haspopup="true" aria-controls="main-header--mobile-nav" aria-expanded="false" aria-label="Main menu">
                      <svg class="svg-icon icon-menu"
                         xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14">
                         <title>Menu Icon</title>
                         <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17 1.5H0V0H17V1.5ZM17 7.5H0V6H17V7.5ZM0 13.5H17V12H0V13.5Z" transform="translate(0.5)"></path>
                      </svg>
                   </a>

                   <div class="live-search live-search-hidden live-search-results-hidden live-search-results-placeholder live-search-results-footer-hidden live-search-alignment-right" data-live-search="">
                      <button id="ls-button-search" class="ls-button-search" type="button" aria-label="Open search" data-live-search-button-search="">
                         <svg class="svg-icon icon-search"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19">
                            <title>Search Icon</title>
                            <path
                               fill-rule="evenodd"
                               fill="currentColor"
                               clip-rule="evenodd"
                               d="M3.12958 3.12959C0.928303 5.33087 0.951992 8.964 3.23268 11.2447C5.51337 13.5254 9.14649 13.5491 11.3478 11.3478C13.549 9.14651 13.5254 5.51338 11.2447 3.23269C8.96398 0.951993 5.33086 0.928305 3.12958 3.12959ZM2.17202 12.3054C-0.671857 9.46147 -0.740487 4.87834 2.06892 2.06893C4.87833 -0.740488 9.46145 -0.671858 12.3053 2.17203C15.1492 5.01591 15.2178 9.59904 12.4084 12.4085C9.59902 15.2179 5.0159 15.1492 2.17202 12.3054ZM16.4655 17.589L12.5285 13.589L13.5976 12.5368L17.5346 16.5368L16.4655 17.589Z"
                               transform="translate(0 0.5)"
                               ></path>
                         </svg>
                      </button>
                      <div class="ls-dimmer"></div>
                      <form id="ls-form" class="ls-form" action="/search" method="get" autocomplete="off" data-live-search-form="">
                         <input class="ls-input" name="q" type="text" placeholder="What are you looking for?" value="" data-live-search-form-input="" tabindex="-1" />
                         <button class="ls-form-button-search" type="submit" aria-label="Search" data-live-search-form-button-search="" tabindex="-1">
                            <svg class="svg-icon icon-search"
                               xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19">
                               <title>Search Icon</title>
                               <path
                                  fill-rule="evenodd"
                                  fill="currentColor"
                                  clip-rule="evenodd"
                                  d="M3.12958 3.12959C0.928303 5.33087 0.951992 8.964 3.23268 11.2447C5.51337 13.5254 9.14649 13.5491 11.3478 11.3478C13.549 9.14651 13.5254 5.51338 11.2447 3.23269C8.96398 0.951993 5.33086 0.928305 3.12958 3.12959ZM2.17202 12.3054C-0.671857 9.46147 -0.740487 4.87834 2.06892 2.06893C4.87833 -0.740488 9.46145 -0.671858 12.3053 2.17203C15.1492 5.01591 15.2178 9.59904 12.4084 12.4085C9.59902 15.2179 5.0159 15.1492 2.17202 12.3054ZM16.4655 17.589L12.5285 13.589L13.5976 12.5368L17.5346 16.5368L16.4655 17.589Z"
                                  transform="translate(0 0.5)"
                                  ></path>
                            </svg>
                         </button>
                         <button class="ls-form-button-close" type="button" aria-label="Close search" data-live-search-form-button-close="" tabindex="-1">
                            <svg class="svg-icon icon-close"
                               xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                               <title>Close Icon</title>
                               <path
                                  fill="currentColor"
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M5.9394 6.53033L0.469727 1.06066L1.53039 0L7.00006 5.46967L12.4697 0L13.5304 1.06066L8.06072 6.53033L13.5304 12L12.4697 13.0607L7.00006 7.59099L1.53039 13.0607L0.469727 12L5.9394 6.53033Z"
                                  ></path>
                            </svg>
                         </button>
                      </form>
                      <div class="ls-results" data-live-search-results="">
                         <section class="ls-results-products">
                            <header class="lsr-products-header">
                               <h2 class="lsrp-header-title">Products</h2>
                            </header>
                            <div class="lsr-products-content" data-live-search-results-product-content="">
                               <div class="lsrp-content-placeholder">
                                  <figure class="lsrpc-placeholder-figure"></figure>
                                  <div class="lsrpc-placeholder-content">
                                     <div class="lsrpcp-content-title"></div>
                                     <div class="lsrpcp-content-price"></div>
                                  </div>
                               </div>
                               <div class="lsrp-content-placeholder">
                                  <figure class="lsrpc-placeholder-figure"></figure>
                                  <div class="lsrpc-placeholder-content">
                                     <div class="lsrpcp-content-title"></div>
                                     <div class="lsrpcp-content-price"></div>
                                  </div>
                               </div>
                               <div class="lsrp-content-placeholder">
                                  <figure class="lsrpc-placeholder-figure"></figure>
                                  <div class="lsrpc-placeholder-content">
                                     <div class="lsrpcp-content-title"></div>
                                     <div class="lsrpcp-content-price"></div>
                                  </div>
                               </div>
                            </div>
                         </section>
                         <div class="ls-results-postspages">
                            <header class="lsr-postspages-header">
                               <h2 class="lsrpp-header-title">
                                  Posts &amp; Pages
                               </h2>
                            </header>
                            <div class="lsr-postspages-content" data-live-search-results-postpages-content="">
                               <div class="lsrpp-content-placeholder">
                                  <div class="lsrppc-placeholder-title"></div>
                                  <div class="lsrppc-placeholder-date"></div>
                               </div>
                               <div class="lsrpp-content-placeholder">
                                  <div class="lsrppc-placeholder-title"></div>
                                  <div class="lsrppc-placeholder-date"></div>
                               </div>
                            </div>
                         </div>
                         <div class="lsr-footer" data-live-search-results-footer="">
                            <a class="lsr-footer-viewall" href="" data-live-search-results-footer-viewall="">View all results</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tool-container">
                   <a class="account-options" data-savepage-href="/account/login" href="https://moskav.com/account/login">
                      <svg class="svg-icon icon-person"
                         xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20">
                         <title>Person Icon</title>
                         <path
                            fill="currentColor"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M9.07453 1.5C6.89095 1.5 5.11767 3.27499 5.11767 5.46843C5.11766 7.66186 6.89094 9.43685 9.07452 9.43685C11.2581 9.43685 13.0314 7.66186 13.0314 5.46843C13.0314 3.27499 11.2581 1.5 9.07453 1.5ZM3.61767 5.46843C3.61767 2.45003 6.05906 0 9.07454 0C12.09 0 14.5314 2.45003 14.5314 5.46843C14.5314 8.48682 12.09 10.9369 9.07451 10.9369C6.05904 10.9369 3.61766 8.48682 3.61767 5.46843ZM2.35675 14.3874C3.88164 13.2638 6.15029 12.125 9.07457 12.125C11.9989 12.125 14.2675 13.2638 15.7924 14.3874C16.5551 14.9494 17.1376 15.5116 17.5314 15.9357C17.7286 16.1481 17.8794 16.3267 17.9826 16.4548C18.0342 16.5188 18.074 16.5703 18.1019 16.6071C18.1158 16.6255 18.1268 16.6402 18.1347 16.651L18.1444 16.6642L18.1475 16.6686L18.1487 16.6702C18.1487 16.6702 18.1495 16.6714 17.5392 17.1073C16.9289 17.5433 16.9293 17.5437 16.9293 17.5437L16.9261 17.5394L16.906 17.5125C16.8869 17.4873 16.8565 17.4479 16.8148 17.3962C16.7314 17.2927 16.6035 17.1408 16.4323 16.9564C16.0892 16.5869 15.5758 16.091 14.9026 15.595C13.5555 14.6024 11.5919 13.625 9.07457 13.625C6.55729 13.625 4.59361 14.6024 3.24655 15.595C2.57331 16.091 2.05994 16.5869 1.71689 16.9564C1.54565 17.1408 1.41771 17.2927 1.33434 17.3962C1.29268 17.4479 1.26222 17.4873 1.24313 17.5125L1.22306 17.5394L1.21988 17.5437C1.21988 17.5437 1.22021 17.5433 0.60991 17.1073C-0.000390232 16.6714 7.48403e-06 16.6708 7.48403e-06 16.6708L0.00162408 16.6686L0.00476668 16.6642L0.0144317 16.651C0.0223748 16.6402 0.0333185 16.6255 0.0472455 16.6071C0.0750945 16.5703 0.114903 16.5188 0.166533 16.4548C0.269743 16.3267 0.420496 16.1481 0.617698 15.9357C1.01152 15.5116 1.59403 14.9494 2.35675 14.3874Z"
                            transform="translate(1.3999 1)"
                            ></path>
                      </svg>
                   </a>
                   <div class="mini-cart-wrap" data-cart-mini-toggle="">
                      <span class="item-count" data-cart-mini-count=""></span>
                      <svg class="svg-icon icon-cart"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 20">
                         <title>Cart Icon</title>
                         <path
                            fill="currentColor"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M3.69409 1.5H0V0H4.86572L7.81445 11.8106C7.84204 11.9219 7.94214 12 8.05688 12H19.1235C19.2297 12 19.3242 11.9331 19.3594 11.833L21.8237 4.83301C21.8809 4.67039 21.7603 4.5 21.5879 4.5H7.5L7.16357 3H21.5879C22.7947 3 23.6392 4.19275 23.2385 5.3311L20.7744 12.3311C20.5278 13.0315 19.866 13.5 19.1235 13.5H8.05688C7.25366 13.5 6.55371 12.9532 6.35913 12.1739L3.69409 1.5ZM19 16.25C19 17.0784 18.3284 17.75 17.5 17.75C16.6716 17.75 16 17.0784 16 16.25C16 15.4216 16.6716 14.75 17.5 14.75C18.3284 14.75 19 15.4216 19 16.25ZM9.5 17.75C10.3284 17.75 11 17.0784 11 16.25C11 15.4216 10.3284 14.75 9.5 14.75C8.67163 14.75 8 15.4216 8 16.25C8 17.0784 8.67163 17.75 9.5 17.75Z"
                            transform="translate(0 1)"
                            ></path>
                      </svg>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <section class="mobile-dropdown" id="main-header--mobile-nav">
       <div class="mobile-dropdown--wrapper">
          <div class="mobile-dropdown--content">
             <div class="mobile-dropdown--tools">
                <div class="mobile-dropdown--close" onClick="closedrawer(event)" data-mobile-nav-close="">
                   <svg class="svg-icon icon-close"
                      xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                      <title>Close Icon</title>
                      <path
                         fill="currentColor"
                         fill-rule="evenodd"
                         clip-rule="evenodd"
                         d="M5.9394 6.53033L0.469727 1.06066L1.53039 0L7.00006 5.46967L12.4697 0L13.5304 1.06066L8.06072 6.53033L13.5304 12L12.4697 13.0607L7.00006 7.59099L1.53039 13.0607L0.469727 12L5.9394 6.53033Z"
                         ></path>
                   </svg>
                </div>
                <div id="coin-container"></div>
             </div>
             <ul class="list primary show-social">
                <li class="list-item first">
                   <a data-savepage-href="/" href="https://moskav.com/">
                   Home
                   </a>
                </li>
                <li class="list-item dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="header-mobile-dropdown-shop">
                   <a data-savepage-href="/collections/all" href="https://moskav.com/collections/all">
                      Shop
                      <span class="icon">
                         <span class="plus">
                            <svg class="svg-icon icon-plus"
                               xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                               <title>Plus Icon</title>
                               <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M5.69225 5.69225V0H7.07107V5.69225H12.7633L12.7633 7.07107L7.07107 7.07107L7.07107 12.7633H5.69225L5.69225 7.07107L5.91697e-07 7.07107L0 5.69225H5.69225Z"></path>
                            </svg>
                         </span>
                         <span class="minus">
                            <svg class="svg-icon icon-minus"
                               xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                               <title>Minus Icon</title>
                               <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12.7633 0L12.7633 1.37882H0V0H12.7633Z" transform="translate(0 5.69238)"></path>
                            </svg>
                         </span>
                      </span>
                   </a>
                   <ul class="list secondary" id="header-mobile-dropdown-shop">
                      <li class="list-item">
                         <a data-savepage-href="/collections/sale" href="https://moskav.com/collections/sale">
                         MOSKAV SALE
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/all" href="https://moskav.com/collections/all">
                         All Product
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/t-shirts" href="https://moskav.com/collections/t-shirts">
                         Tees
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/shirts" href="https://moskav.com/collections/shirts">
                         Shirts
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/boardshorts" href="https://moskav.com/collections/boardshorts">
                         Boardshorts
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/hoodies-sweatshirts" href="https://moskav.com/collections/hoodies-sweatshirts">
                         Hoodies &amp; Sweatshirts
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/denim-pants" href="https://moskav.com/collections/denim-pants">
                         Denim &amp; Pants
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/denim-jackets" href="https://moskav.com/collections/denim-jackets">
                         Jackets
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/caps-hats" href="https://moskav.com/collections/caps-hats">
                         Caps
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/accessories" href="https://moskav.com/collections/accessories">
                         Accessories
                         </a>
                      </li>
                      <li class="list-item">
                         <a data-savepage-href="/collections/moskav-x-fools-golf" href="https://moskav.com/collections/moskav-x-fools-golf">
                         Moskav x Fools Golf
                         </a>
                      </li>
                   </ul>
                </li>
                <li class="list-item">
                   <a href="https://moskav.com/pages/lookbook">
                   Lookbook
                   </a>
                </li>
                <li class="list-item">
                   <a data-savepage-href="/pages/size-chart" href="https://moskav.com/pages/size-chart">
                   Size Chart
                   </a>
                </li>
                <li class="list-item">
                   <a data-savepage-href="/pages/about-us" href="https://moskav.com/pages/about-us">
                   About Us
                   </a>
                </li>
                <li class="list-item last">
                   <a data-savepage-href="/pages/store" href="https://moskav.com/pages/store">
                   Store
                   </a>
                </li>
                <li class="list-item" id="coin-container"></li>
             </ul>
          </div>
          <aside class="social-links">
             <a href="https://www.facebook.com/moskavofficial" class="social-link facebook" target="_blank">
                <svg class="svg-icon icon-facebook"
                   xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                   <title>Facebook Icon</title>
                   <path fill="currentColor" fill-rule="evenodd"  d="M30.11 0H1.76C.786 0 0 .787 0 1.76v28.35c0 .97.787 1.758 1.76 1.758H17.02v-12.34H12.87v-4.81h4.152V11.17c0-4.116 2.514-6.357 6.185-6.357 1.76 0 3.27.13 3.712.19v4.3l-2.548.002c-1.997 0-2.384.95-2.384 2.342v3.07h4.763l-.62 4.81H21.99v12.34h8.12c.972 0 1.76-.787 1.76-1.758V1.76c0-.973-.788-1.76-1.76-1.76" ></path>
                </svg>
             </a>
             <a href="https://instagram.com/moskavofficial" class="social-link instagram" target="_blank">
                <svg class="svg-icon icon-instagram"
                   xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                   <title>Instagram Icon</title>
                   <g fill="currentColor" fill-rule="evenodd">
                      <path d="M16 2.887c4.27 0 4.777.016 6.463.093 1.56.071 2.407.332 2.97.551.747.29 1.28.637 1.84 1.196.56.56.906 1.093 1.196 1.84.219.563.48 1.41.55 2.97.078 1.686.094 2.192.094 6.463 0 4.27-.016 4.777-.093 6.463-.071 1.56-.332 2.407-.551 2.97a4.955 4.955 0 0 1-1.196 1.84c-.56.56-1.093.906-1.84 1.196-.563.219-1.41.48-2.97.55-1.686.078-2.192.094-6.463.094s-4.777-.016-6.463-.093c-1.56-.071-2.407-.332-2.97-.551a4.955 4.955 0 0 1-1.84-1.196 4.955 4.955 0 0 1-1.196-1.84c-.219-.563-.48-1.41-.55-2.97-.078-1.686-.094-2.192-.094-6.463 0-4.27.016-4.777.093-6.463.071-1.56.332-2.407.551-2.97.29-.747.637-1.28 1.196-1.84a4.956 4.956 0 0 1 1.84-1.196c.563-.219 1.41-.48 2.97-.55 1.686-.078 2.192-.094 6.463-.094m0-2.882c-4.344 0-4.889.018-6.595.096C7.703.18 6.54.45 5.523.845A7.84 7.84 0 0 0 2.69 2.69 7.84 7.84 0 0 0 .845 5.523C.449 6.54.179 7.703.1 9.405.023 11.111.005 11.656.005 16c0 4.344.018 4.889.096 6.595.078 1.702.348 2.865.744 3.882A7.84 7.84 0 0 0 2.69 29.31a7.84 7.84 0 0 0 2.833 1.845c1.017.396 2.18.666 3.882.744 1.706.078 2.251.096 6.595.096 4.344 0 4.889-.018 6.595-.096 1.702-.078 2.865-.348 3.882-.744a7.84 7.84 0 0 0 2.833-1.845 7.84 7.84 0 0 0 1.845-2.833c.396-1.017.666-2.18.744-3.882.078-1.706.096-2.251.096-6.595 0-4.344-.018-4.889-.096-6.595-.078-1.702-.348-2.865-.744-3.882A7.84 7.84 0 0 0 29.31 2.69 7.84 7.84 0 0 0 26.477.845C25.46.449 24.297.179 22.595.1 20.889.023 20.344.005 16 .005"
                         ></path>
                      <path d="M16 7.786a8.214 8.214 0 1 0 0 16.428 8.214 8.214 0 0 0 0-16.428zm0 13.546a5.332 5.332 0 1 1 0-10.664 5.332 5.332 0 0 1 0 10.664zM26.458 7.462a1.92 1.92 0 1 1-3.84 0 1.92 1.92 0 0 1 3.84 0"
                         ></path>
                   </g>
                </svg>
             </a>
          </aside>
       </div>
    </section>

<section class="mobile-dropdown" id="main-header--mobile-nav">
    <div class="mobile-dropdown--wrapper">
        <div class="mobile-dropdown--content">
            <div class="mobile-dropdown--tools">
                <div class="mobile-dropdown--close" data-mobile-nav-close="">
                    <svg class="svg-icon icon-close" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                        <title>Close Icon</title>
                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M5.9394 6.53033L0.469727 1.06066L1.53039 0L7.00006 5.46967L12.4697 0L13.5304 1.06066L8.06072 6.53033L13.5304 12L12.4697 13.0607L7.00006 7.59099L1.53039 13.0607L0.469727 12L5.9394 6.53033Z"
                        ></path>
                    </svg>
                </div>

                <div id="coin-container"></div>

            </div>

            <ul class="list primary show-social">
                <li class="list-item first">
                    <a data-savepage-href="/" href="https://moskav.com/">
                        Home
                    </a>
                </li>

                <li class="list-item dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="header-mobile-dropdown-shop">
                    <a data-savepage-href="/collections/all" href="https://moskav.com/collections/all">
                        Shop

                        <span class="icon">
                            <span class="plus">
                                <svg class="svg-icon icon-plus" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                    <title>Plus Icon</title>

                                    <path
                                        fill="currentColor"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M5.69225 5.69225V0H7.07107V5.69225H12.7633L12.7633 7.07107L7.07107 7.07107L7.07107 12.7633H5.69225L5.69225 7.07107L5.91697e-07 7.07107L0 5.69225H5.69225Z"
                                    ></path>
                                </svg>
                            </span>

                            <span class="minus">
                                <svg class="svg-icon icon-minus" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                    <title>Minus Icon</title>

                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12.7633 0L12.7633 1.37882H0V0H12.7633Z" transform="translate(0 5.69238)"></path>
                                </svg>
                            </span>
                        </span>
                    </a>

                    <ul class="list secondary" id="header-mobile-dropdown-shop">
                        <li class="list-item">
                            <a data-savepage-href="/collections/sale" href="https://moskav.com/collections/sale">
                                MOSKAV SALE
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/all" href="https://moskav.com/collections/all">
                                All Product
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/t-shirts" href="https://moskav.com/collections/t-shirts">
                                Tees
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/shirts" href="https://moskav.com/collections/shirts">
                                Shirts
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/boardshorts" href="https://moskav.com/collections/boardshorts">
                                Boardshorts
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/hoodies-sweatshirts" href="https://moskav.com/collections/hoodies-sweatshirts">
                                Hoodies &amp; Sweatshirts
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/denim-pants" href="https://moskav.com/collections/denim-pants">
                                Denim &amp; Pants
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/denim-jackets" href="https://moskav.com/collections/denim-jackets">
                                Jackets
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/caps-hats" href="https://moskav.com/collections/caps-hats">
                                Caps
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/accessories" href="https://moskav.com/collections/accessories">
                                Accessories
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/moskav-x-fools-golf" href="https://moskav.com/collections/moskav-x-fools-golf">
                                Moskav x Fools Golf
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="https://moskav.com/pages/lookbook">
                        Lookbook
                    </a>
                </li>
                <li class="list-item">
                    <a data-savepage-href="/pages/size-chart" href="https://moskav.com/pages/size-chart">
                        Size Chart
                    </a>
                </li>
                <li class="list-item">
                    <a data-savepage-href="/pages/about-us" href="https://moskav.com/pages/about-us">
                        About Us
                    </a>
                </li>

                <li class="list-item last">
                    <a data-savepage-href="/pages/store" href="https://moskav.com/pages/store">
                        Store
                    </a>
                </li>
                <li class="list-item" id="coin-container"></li>
            </ul>
        </div>

        <aside class="social-links">
            <a href="https://www.facebook.com/moskavofficial" class="social-link facebook" target="_blank">
                <svg class="svg-icon icon-facebook" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>Facebook Icon</title>

                    <path
                        fill="currentColor"
                        fill-rule="evenodd"
                        d="M30.11 0H1.76C.786 0 0 .787 0 1.76v28.35c0 .97.787 1.758 1.76 1.758H17.02v-12.34H12.87v-4.81h4.152V11.17c0-4.116 2.514-6.357 6.185-6.357 1.76 0 3.27.13 3.712.19v4.3l-2.548.002c-1.997 0-2.384.95-2.384 2.342v3.07h4.763l-.62 4.81H21.99v12.34h8.12c.972 0 1.76-.787 1.76-1.758V1.76c0-.973-.788-1.76-1.76-1.76"
                    ></path>
                </svg>
            </a>

            <a href="https://instagram.com/moskavofficial" class="social-link instagram" target="_blank">
                <svg class="svg-icon icon-instagram" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>Instagram Icon</title>

                    <g fill="currentColor" fill-rule="evenodd">
                        <path
                            d="M16 2.887c4.27 0 4.777.016 6.463.093 1.56.071 2.407.332 2.97.551.747.29 1.28.637 1.84 1.196.56.56.906 1.093 1.196 1.84.219.563.48 1.41.55 2.97.078 1.686.094 2.192.094 6.463 0 4.27-.016 4.777-.093 6.463-.071 1.56-.332 2.407-.551 2.97a4.955 4.955 0 0 1-1.196 1.84c-.56.56-1.093.906-1.84 1.196-.563.219-1.41.48-2.97.55-1.686.078-2.192.094-6.463.094s-4.777-.016-6.463-.093c-1.56-.071-2.407-.332-2.97-.551a4.955 4.955 0 0 1-1.84-1.196 4.955 4.955 0 0 1-1.196-1.84c-.219-.563-.48-1.41-.55-2.97-.078-1.686-.094-2.192-.094-6.463 0-4.27.016-4.777.093-6.463.071-1.56.332-2.407.551-2.97.29-.747.637-1.28 1.196-1.84a4.956 4.956 0 0 1 1.84-1.196c.563-.219 1.41-.48 2.97-.55 1.686-.078 2.192-.094 6.463-.094m0-2.882c-4.344 0-4.889.018-6.595.096C7.703.18 6.54.45 5.523.845A7.84 7.84 0 0 0 2.69 2.69 7.84 7.84 0 0 0 .845 5.523C.449 6.54.179 7.703.1 9.405.023 11.111.005 11.656.005 16c0 4.344.018 4.889.096 6.595.078 1.702.348 2.865.744 3.882A7.84 7.84 0 0 0 2.69 29.31a7.84 7.84 0 0 0 2.833 1.845c1.017.396 2.18.666 3.882.744 1.706.078 2.251.096 6.595.096 4.344 0 4.889-.018 6.595-.096 1.702-.078 2.865-.348 3.882-.744a7.84 7.84 0 0 0 2.833-1.845 7.84 7.84 0 0 0 1.845-2.833c.396-1.017.666-2.18.744-3.882.078-1.706.096-2.251.096-6.595 0-4.344-.018-4.889-.096-6.595-.078-1.702-.348-2.865-.744-3.882A7.84 7.84 0 0 0 29.31 2.69 7.84 7.84 0 0 0 26.477.845C25.46.449 24.297.179 22.595.1 20.889.023 20.344.005 16 .005"
                        ></path>
                        <path d="M16 7.786a8.214 8.214 0 1 0 0 16.428 8.214 8.214 0 0 0 0-16.428zm0 13.546a5.332 5.332 0 1 1 0-10.664 5.332 5.332 0 0 1 0 10.664zM26.458 7.462a1.92 1.92 0 1 1-3.84 0 1.92 1.92 0 0 1 3.84 0"></path>
                    </g>
                </svg>
            </a>
        </aside>
    </div>
</section>


<!-- test Content -->
{{-- @foreach ($items as $item)
    {{ $item->item_name }}&nbsp;&nbsp;
    {{ $item->new_price }}&nbsp;&nbsp;
    <img src = "{{ asset('storage/'.$item->photo_1) }}" />
    <br/>
    <br/>
@endforeach --}}

<!-- test Content -->


<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">
                @foreach ($items as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ asset('storage/'.$item->photo_1) }}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{ $item->item_name }}</a>
                                </h4>
                                <h5>{{ $item->new_price }}</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                    aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Two</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur! Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Three</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Four</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Five</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur! Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Six</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
</footer>
@endsection
