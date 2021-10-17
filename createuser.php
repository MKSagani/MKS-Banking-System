<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBQVFRgVFhUZGRgYGhgYGhgSGRgYGBgYGBgZGRgYGBgcIS4lHB4rIRgYJjgmKy80NTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjEhJCE0NDQ0NDQ0NDQ0NDQ0NTQ0NDQ0NDQxNDQ0NDQ0NjQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDU0NP/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAECBwj/xAA9EAACAQIFAgQDBgUDAgcAAAABAgADEQQFEiExQVEiYXGRBkKBExQyUqGxI8HR4fAVM2JykgdTc4KiwvH/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAoEQACAgEEAQQBBQEAAAAAAAAAAQIRIQMSMUEEExRRYfAiMnGBkUL/2gAMAwEAAhEDEQA/APJ6bwlXi8GEI8wlE7IsdZW/iE9Dyd9hPMssfxCeh5JU2E4NfEjp0yyMdoox7bGMi+0T5g/MwizaSF9F/FLLlTympU8ctOT1OI3IiKLbhztOqkjw52nbmG7AqyA4kbRc8YYptoqqPMbybJYBK1MRPmVHaOXaA41LiaKRMolOrrZoRha9jJMdhzeBBCJompIxppljw2Jnb1ogp1yIQMVJdotM7xb3EWuYTWqQJ2lQTZMjjVvCsMd4DeFYZppJYJQ5pnaRVztN032kddtpi2VQDUaDM0kqtBy02iiWzvVOtUivNlo6EadpGTNM04LTRIk6LTYMi1TYaOgCkMJw7bwFWhNFplNYKQ8p1NhMgIaanOa2VHL8I9Vwii5/aWZfgfFEXAv9DLf/AOFnw4un7R13Jvv+k9ZFBFFrCey8nmb3Hg+esN8KYpDcpLFgMNWTlDPYGpIegkLYRD8omctGMnbKjrSR5w2IcDdT7Rbi8Qx6H2nqrZah+UQerklI/KJC8eJp7mR4+D4ryyZPXAtLdV+GqR+USJfh5F4EUvGi1gcfIaeSTDYgWktSsJwMstxNjLiZzvxJdM1Xkx5Ijhi/EHqZM3eWTDYYIJxXrqJpHxIpZIl5TvBVXyd5BVyhz0lvRw0nSkIPxIgvKfZ5xXyFz8sW4nIKnRDPXxhx2nX3Vewh7NfIe6+jwqvk1YfIYE2Eqryjexn0A2BQ/KJA+UUj8g9pXtvsn3H0eAurjlW9jB2vPfanw9RPyCDP8JYc/IIe3aD118Hgl94TQM9pf4Jwx+QewkY+BcPcHTB6MmNa0Sj5H8P1K4vYgRxiPgKoR4Wno2AwKUlCqLAQ1WEuPjRSyZy15Xg8SxfwBjB+FQ36Sv474fxVL8dFwO4Fx+k+kbSOrRVhYgEecv266JWvLs+XiCNiLes2TtPe82+EsNUuSgB8hPPc9+DVQnRt6TKWk0bR1VIoLGQlo5xOSVFiytgKi/LEkXaBtU6DSNkYcgzFMuhoKVoZh+YvUxlgxMNTCKjyHhZklCzJx2b7T1z4dw4pU1A2sJLmmZ6RsZrEPoWwlcxlUsZ7NnkUE0s0cnmWLAVGYAmVTCUbkS1YHwrGKhkJhMHFWYKkYUEWnOmcNXAkJxgisKCNE6RAJxTqXkeIxQUQCjrE1gBEGIbU15LicSWkmGwpO5iHQVltLvGyqIPQp6ZODKQmSgTYEiBmmrgR2FE9pq0DfGASE5io6wsKGQE3aDUK+qFCCEc2mFrTitWC9Yur44d4NjDKlWcJU3ik4knrMTFgdYrCiwo81Ur2iCpnAXrFOLzlm4kuaGoMf43NAsrOPxRc8Qc4knkzhsQszcmzVRoGemD0gtXBoegh5roZzdT1iKEdfJ0PyiL63w+p6S1mlInp2ipDUminP8PdpJQyhlln0E9JNRo9xJlppopajQhXAtMllukyZe2iae4YbmmaAmwMVfbM3AgGWoXPiMsaUUUTrbo5FEmy1NhGquYroYxF6yQ5vTHUQsdDQOYRRMRLnCd4ywlcv6QsVE2IpluJqlQC8yWrWCDcxJi8yJNlgIZYjMVTaDKWqekWYdC7XaWPDOqiAyCjgt943o0gBF749R1mDOEHWUiWNLTYEWDN0PWdpmSmOxUNLQWth7mcLjLwujUvHyAGcCTN08sF7neMHqqo3MR5n8SU6ewNz5QwhZY51Kg6RRjs/RDYG5lOzL4mZ77+0X4aqHNyZLkWo2WvE5qX6wH70zdYufEKBa86w+KQckSHJlqKGv25AglSu0199TvImrIesm2VSODUJMk+z2vNq6d5JrB6xDK7j8Y6tYDaLq2LfvLTXwaPAnyZTGmhUVlsxYHmEUMxbmNnyFTJEyxE7R2hUzMtxjPsYxaneAivTp8WgGMz3tFVjHTuicmLMbnAHERVswZ+sgFBzvaUokthbZs0yQ/cm7TI8CyWXDoV4hH2dVuLxotaivadrmSdBAViGrlNc9YMcqqg9zLamJZ9lWM8NhABqaOxFfyTITszyysyoLCY+IHCyFGDcwAFrhn9JxTy7yjRQonX3teALnyiwuQBaWAMIGXk9YXQLMLiw/eYlRj5Djfr6SXOK7KUWwJ8lB5JgdXJ1XrH7q1ud5F9iSbgSJatcIqOn8sQfcG6D3hSZa1idQ2jX7o2/n5wHF5dWIsjgd7mZS1tRdGihpvs5w9YLsSD5w4Y9eLgecXU8sUDS3ibuCZhyZehMy9fWNPT0jjNWdx4X2PaVavkTsC+v3l1w+Bpou4JPa8D+xYtdgFW99+Ipauqqd8jjDTfC4KS+QuBe94PVwVVBsPaXTEFSxCm49hfyglWnfaSvJmnnJfoxfGChYkVR0MDfEuOSRPQK1AEHwg+sW4rJ6bjfwt+k2j5UX+5UZy8d9MphzBx8xktPMXPFzHp+GlB8X9j6QpMLQpjgTpUk1ayYODTyK8KK7dxHeEwzj8TSF81UDwCK8Tm1RtuI8sWEWZsSiDdoFWztBxKy5ZuWmkpGG0NwxxOeOdlEC+1xDnggQvDOiciHpmdIDpABW2AZhu285pZM5PMaJiabG+qMKFZOhhbCkJ0yW25hq0gBa0ZkgjYzhcKTCwoA0zIw/0+ZACsriCTbcmW/IMnZgGcW9Yxyf4RSj4n8TdzDMXjQvgpjU3l0lmVkx+zpDpImdqnGyyDC5fqOqq1z+U8RjTXUwVBYd/IcxPCspZAloHdVBJ7yXC5NVBuzAA9pYaCqoAA52v3Pedk7eUh2+wTroRVsMALE+pnWHw1twJqtUDKxAuQTt3seIThMQGANrcbHY+04r3Syzq4jhEdU6Cqk21Np29zDFfdhtsNgOQO5i3OlBVWv+FtQ3tvBsDmqVLayVYbbHm3AYdRBaijJxJcHJWWQAbzhlBH+XglPE7gCxuL+C5UeRPT2kxr252/vN/UizLa0afDG11P0vOUwbck28hNVmsQegvcDYyLEY5iCFsoHVjcnva/7yG4ZbKW94RNUCoOQP3PqYG9fVsD16dYuxuNUC7Nc8WUbk+vA9YvoZxRB3RufmAY295zymm8YR0Q06VvLH32fW52/keDI8XQNrX633gFX4npoPBSLW8tI9zF2K+LKrCww4W/52+vW0Jba5GlO+DupQZW1E2UeK9+QObSZKtwWtyfDq229O0QV83xDWYKlhwbg278GGJjgwuQd+Tx0F9xt29pjaN0g92F+YJidLKT52gxJYjmx6A3v3tO3RU3drAfKPE5+nSFgcuf4Lpq1aRdT1Bva0Q2vzJc3zhbEU9h+23Pmf2lT/1Rj1tOzxW8nLrNYLUuFmmy8mV2lmNQ8MYwpY+qe86zDAd/pzSN8uqdJpca/nJFzJ47YsCnF03XkGAazwZZWrM/Igr5E7m6qY0xNCPxLvcw7D127mPcH8I1G/G1vSPMP8PUKe7G/rHaFkrWFxNX5QTHuAq1jyvvCamYYdNlsSO0WP8AERZtKrb1hz0BYVLTcplTN6tz4pknaOy/Vczq4gXVSq39LiZhswSn4FW79RyZWqucVsT4aShE6sObefaFYNNJsnibbU5/lG5EqJaKZ1NrqMB2UfznVbOaVOou/h3Bt2O0r1SvYMqeN+u+4v3guKwx03As3XrM5SbWC1FJ5PRqDg207qTqVgbgjqD22khrCxHPN7dJ5fl+ZV6DXVjp6pfwn6HaOcP8SLUurEU2Y32JAJ4vvtv9Jg9alhFrSt8neZVTSql1bYk7D+k6w+c02Opm0G+5XbV6i0jzKiX2S5Fh4ls3rsCYgzKg1NRrpuV6sEPh/wCVhufpOG3eDrxRb8diA6eA3HQjeVPHeEamJ53ZQbDsTa9vWLqbMlmpVCAeLFlJ6/hNjO6XxHWBsxV7dHVTv5ki/URP9TsSlSoYLn+ISx1h0HBsCCNvmH15jXD/ABfSb/cpup7oQw/kZW8bmquP9hFNuVLgb78BrdImLsCSALHpvYelzeVGyWenU8+w77iuFO3+4pXfe25BHf2gmOzekDqLK42P8F6bHnorWbj9p58uNI5W/oe+of8A2MgrYtTwSONmHcEDcX7GXUmK6LdWzvCuxJDqL7DS3G1r24J7wV83wIY3qsi2NiUqsSeeAQBt+0qy5oo5B+luLX79t5IM4pjm/txta38vrKWm7zGx+pjksD57gG/CXFr6wPtmtsCDfT63H6zaZhhWQhaVQMp2YAkP31faqunkcX7RAM9obDxd+OlrDg8zpviPDjq3sb8j+V5Tg+oP8/oSn9jdswRdloOb+aKQbMt9SHi+9j1EgbOH+WiF4/EQTey3NwLi4PHHO0Wn4lo9Ecn0AHN+pgGL+IdvDSFu7N5AcAeQgtGT/wCfz/RvV+xtiM5qnkgb3Onm+w5P0i58yaxJY22vvztx58xU+PeoOgHZR/PmQLhqmr8JN+rf3msfHiv3UjKWpJhOMx+qyre3U9/7SLCaWJvC6OWs3IAhuEyHqWO/YWmycYqkRTbybwddFFto0wtfWPCs1hMqoJuxX/3G5jGjmeHQlVBYj8q7e8atg8cklDL2I4huFyW34jNLmZK3FlHYbkes5+9M5+YjzlpMhtDKlhqKc2mVc4RNkRm9BYe8Xuh7W9SJtaRbYgH6iVRJJiM2qOp0eE9uYlxFWo+7t9L8xscIfy29CJBWwBPy/tGmgoTnC9rCcLhWuLkW8uYxfLn7H2Mhq4KoOLj6R2FAn3Jet5kw063ce0yAFqfAgAKGVVHC8A/9XeSPXpBSv2qr0upFx6Sutl1w2tNJNtDVaoVvqoJBO3ad08HpW7sluVZKTtpIP5wFB+tpl/ZY4TH4RCGD3K7eAMb372G5nOI+IKNwFR2vsLIdz2v38ovw+HpqQ5q1LqNIZF02FyTtqI/Sd42hh/C9nqtf8Tvp0nu1gLH6RYHkGxeYM5KpQqBxvZ/Cbd9+krr1MRu7oNINjZlDD1ViDLGv2RN3prYjckuxtcj5336SSpRRV1U/smW4uAihx03VrnmJxi+UFP5KwucKrAByp5uLge4MaVfiLFoPDiXC2sBqJFtuh9YbTSo5A0Nbuq6QN7fiIt5wXMshqE2K/aC9xuLbdwxmT0o2O3QorY6tUN2dj5gkdPKaWg3Oo39fTvH1DKWP46CLbqHtf6KD+8IfJ6IG4sPNiOYnpPpoe75K8HYC2q48wO9u0GqYph247d7n+QlmqZCttkY+l/5mQ1Phm/CqPNyTb6Dn3Ea0PmhOZVauZsOo6cj0/qYE+cNxpU/Q+cuh+FktubHuij9NV5Ficnwibvo238bfuBsfabQ04LohzkUepmNQ/Kov5Htbv2nF6zcKfoP6y3VMXhUF1AI4BRQAfQmBVMzuGKUGKre7H8I43LDYc8E+tpslXCRDb7ZXhg6p529T/SS0csY8n2jfE0sRZCVCK/DW1IO12XVzt0g1XLmAYtXQlflDMDa/UWBB+hF4fqfaQk0iEYRV/EwHqRM+8Ul5YH0F5Lg8BTZtLqzal1K1MkNvcgFSLdD34jfBZLUK2XDHUD4XZQjDba9yA37SXBdsrcxRSzMcJTYm17AdO9h0hCYnEMutaHh/Nzb6cyxt8JV6xV3+zQ7X0Akm1tja19vOMk+FdJJao7X2IpjSLbWFiT/hi2QXQ90ipgYoi4amNrjS6m/vDqdQKil6qt+awbUL+RNm9RLKPheiFuKGtgb/AMR99hsR05tsbRpg8ppqo/gohHQBT7HtFSHbKVXzHDobKhcDfURYE+hse3vMGe0xxQAPXVx7DmNMyp2qMHHhuL9LKatQN/8AEJ+kjxzqu7KrElr373OobjvKSAUHGsW1g6t76fw2A6ARvTzJWQve5X5Oo+kRVaykD+Gg89PMHaot7qGHoevoYyRs+fv0VR2uBOFzivzqW3YLFDVNtR9Bf9zaMsNlwcX1b3+lu4PWMQXRz3Eg9CO1t4fT+IKp20getpJh8no6Qbnbktx+sIbAUgNt/SxiwMxc3c2vp9v7wlc2cbaUPuIKuBU8hreX9uJFTwiatJYg72uSPrvwOIUgDf8AVm/8tf8AumQUUKfduSOT0NpkNqFZK+SVLmzqb9Te59eYVg8srIbiotjyCCQfUf3leoY52NnqMm21uv6SUlyCRXe/Qd5k7NU0WB8hUsW1lb76aYAHTjVe3Ah+DwCUx4RudiWNyR/naVei5KbvUDdiD+hm66EWZalRgeV3uPSJ2UW44enyUQnuVW86BQcWHpYSn1FGnUHe1vwspDXg1Gkhco5qBLAhri+rm3pAC51K1Pq4/wC4QWtisOeXG35Wb9Qp/eVDGYRA6hEdwGvqJdbp2IA584ccHT1g06FS1jqV9Wh79973/SG0VjTE5vgxbVZtN7eAtbbe1xzaDj4locICbdAFQfS5H+GQ0cG+ssuGVUIN0qaSoPAKnkek0mX1kRkLUEQknRp1Kt9zvzz5w2oLZBi/iwqLiiRzvUNgbG21hvx08u84xGaYo6AUCFzZdQAW/Ys5G/lYfWd4mkHTRUxCuotbwaiLf8juZvL8qp1AwFWq6m4IJ0oN7+FekeEKmxJj0xWopVq6W1ApuQjLe/4/CAOhG52OxguIwdFApFR/tb2K1VYK2lbfiQi9+b6jfyl3p/D9Acpq6eMk9bwyngaVMeCmq/8ApoL/AKS1MlxKVg6LalajhNDKPE1tSP5DWBYb31BgdrbyWhl1e7XqpRLHUUptcXP4j9mdQ38iPOWKtRes5VUZUW2p3G7dlRW2+pEOqq6JdUpr0sxPJ/6Vj3sW1FYo/DqMFu1WoDv4CETxc3Vm25va20ZUPhqmqjVTpqEJsapaqNI21eI2XoY0ehWcAI7KdrsAEUDrtYsfcGMaeVUggR1DjVrJqeIs/wCck9Y9zFQrwuFS4RKhfuMOEVVAuPEV/Dciw3vt5Gaw+DxA1BUamuo2D1Fbwg2DazrNyBfcEb8dY8SnRoLdVVFYqLILAmwVbAbcAD6Sda6tcD8Q+U7H2MQFdw1XFVKgbQKaWI/hkuGGseJWdVUk6TY22DXsbgSx/Z+UXLmbXs6FTa7AG7Jfg3Ng42+UzderiLI9Io4ZlHBC6GO5ZeRYdiPQwCw9kkbSdGJHiXSeovceoPacssTQ0yu57l4bxgXvsQOtwAR9Qq280A+YmJXpK4s3iItc8Ek7Bwezdf8AlfuJdHQG4PB236xLj8sIOtCevna/Pv16H13IhlQx+WaRqUMQO5DC37/vACl9wB9OkuKHy9V3/Qnn0O/rzF2KypDuhCk8g/hP9JRJWalIWI77+hH/AOmGfbHQNLEEWBA228x/MTeJyqqu+m4/4m/pACGU7i3k1/0NtoxB5xLAWa7XsN97Dpa5teM8FmdgVTSD0Di7H0AOn9Ypw2JA5AYHo1tvrD0yunW3UMp56m39PpAQ/wAO2sHXVIbttT2/4qp3HmSeJJQpYRG0l1Z23soLtt3CgxDh8mZXDrZwBY2bp5HpLLgMVhkUAoaR6ki6+42hQWRVa5BOlVK9NiNvrMjdcLRbxCoDffZpkYrKVk+GXV/E5HeWunRQcKIvx2XhvEux8pFgcayHQ857s6EqC8xqun4FFvSLRjnBufa0sKEMO8w4VD0ETYxY9UsutGHmpEGTNWU7qD9N49TCIOBNjBp+USShVXxtRwGprZethvAlx9QMNRYjqDtLQlMLsBabNFTyojTEV/E0g666btxuhJgVGnWJ8Cte/X+8ty0FHCiQ1mcHwrKsliqvkrOgbYP1A4MEw+R10OoOE7yzFC68lTNfdWIsxuOsAshw1Jur6jbsBCEKkkA7jkThcvAYMCRbtO8TSRW1k2J226x0S2Y1QBgp2J4J4PlIsTVdRdArb26n3hRprpFxcDcExZiM5RNgkpIhsYuzMpKGzL7E9vSaZC5XWmm299XDW7dREyZu78EC/QQXG18QjatZIP8AnaVRO6yyCgb+J/DwVO4I9Dx9JMcIgKsASVvp3O1+0qH3qs631Xt9D+02mY1UAKufRtxChKS7LBjMz0MAyED8x3EPoV1cXVr+kr1L4gVhpqp9RuJMuFH46D+enpAtND685YRXhs0IOmoNJ79DGQcEXBgBhWcNOzObRFAGMwCvuNjFFSg6X1C47j/N5ZdM7WleCAqYPadLTvyB9ReWOrlCNuPCfKBVMtdL8MPLmNEWJXymi/KAX/Lt+0gOQsm9KoR5H+scu9ufYwStmIXiWIQV6FRNjqUDtfQZ0MxOnTr09LqAf0MKxWb325/aIMXRDkkXUn8vHtCw2saNXw3Vmv10qoH0mSufcG/MJkW4e09Jw2JVxsZzi8GHHnPN8s+LWRgGXbv2noOV5olVQbzGUHE0jJSIcNiHpnS3HeO6FYMILiMMHEAVmpnyk8llgWdiBYXFBhCwZLGSgTYE5UzpTGhHQE6AmhNgxoDqbE0DOpSJMAguPwmtbdYTeYGjQmV2tinRSjbjv5QVWVgAe3+GWXEYZXG4iLFZUym6+0pMzlGxRVRkYkDb9oTQzJj4HFwephiUCwswnTZPcbR2iEpLkCxGXsBrVtj06TujiFYaHUevMhqYasjaRx7yc5Y7Dcbxg/4IKuEUNYNdTOMM70HBUkjqB+8Lw2TVAeY5w+XBd239YrCMWSJorpuN4E+Gq0TdCWXsYyo00Q7GdPiVHP6xGwPgsWz8oQfOMFQwB8xVeF9hIcTmjAbbev8AaBI30AczTYhF+aVqvmJZTd9/+MS0sey3vdvUx2Oi5Vc7pgkLuR2gwz4NwPfaVgVGNygG/O0HpMzNuSD6/wAorY1FFjxOIV+QInxOETkPb6wd1Zb3a95E+HD7XPv/ACkjwR1MLfg3kL0GHSF08M6/hHv/ACMO0MRvz5x2FCD7MzUefd/T3mR2KjyOOshzlqLBbnTf2mTJ0Pg51yeo5VmOtRGFakGEyZOKWGdkeBawKG4jPC4u8yZAA1WkqtMmSQOgZ2DMmRoDoTd5kyUSYZxeZMgBvVM1CZMlAQvSU+U2rW6zJkCTh3XqJy2JA4EyZACOpiz0gRx7ahfb9ZkyUgJMTXFr3N/aC/fwRxv57zJkQIXvji3SDtSZt7lfreZMgMFdyGsTf02halX2tv5zJkAJaFFh1uJIcKt7nmZMiGcVayLzv9IHVzZF4H6TJkaEL63xD+URfVz2oTt+pmTIE2Z/qFTvNzJkBn//2Q==');">

<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4" style="color : goldenrod;"><b>Create A User</b></h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="logo.jpeg"></div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center mt-5 py-2" style="color: goldenrod;">
            <p>Made by <b>Mahi Sagani</b> <br>The Sparks Foundation</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
