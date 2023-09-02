<div class="grid lg:grid-cols-4 gap-10 lg:gap-x-12">
    <div class="mb-16 lg:mb-0">
        <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center bg-white">
                <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                    <img width="40"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEaUlEQVR4nNWZaahVVRTHfw7vJb6nlUNEDh+MHFJSS4KiciCIoOwpIkYIpQ1kg68BlAQbPoToF0UURYRyKigK0gYVMtAPGdjwLDMb0CywhMwB5+eVJf8Dm+M595y9z33e4x82776z9lp777PXWvu/9oHaoxGYCmwA9gIn1Oz3esmsT6kxGfgdqGS034BJlBCdgYXORH8AXgRuBZrUhgOzgTan3wLplgYLNbHTwDMZkzPZs+obLaY07lTRxMZ66I1zFtNCndHoxITthC9mSfdXoIE6YqoTEyG+3gXYLRtTqCPe0yReKGCjVTbWUUf8oklYdgrFcNmwc6ZuOK5JNBew0UM2zNZVvZCesnGUq9y1RpTBtdZrEnZih+Jl2VhDCdJvW4H0+2MZ0m+jCGBFtMMXz0t3X70PRMRiI4pitCMvxgNngAvAREqCBc5iZsll0tBFO3FGOm9TInR2FlMR7WjVYdesZtnpJScmLmgRpaLxEVpEALMKq31lcqc0NCgDGXf6WYemtT3AWsnqHtguBgMrgQPAuRy7kNbOA38Bm4DpV3qRlmpPFZh8tdYGjLkSi4iCuh1YAgwFuqb03a++t2VksX7ajd0OgbyfDsR0DXQ25y3IWvV/Lqf9BmCFs5ghdAAGAcc0iPlzHjyl/u97jNNJvMv0vq2y20Gw7d/u+PHMnHpD1f9vz/GaHeqTd6xcmBvLMn083u4/0rs5kJAerFUmG+HQCWvbPPU/lN7jnnqdnOC3K6fCLrUzlh7neNqYLb3VBdjx5xTEqzL0J/Cvfo/2tDHaoSW+uF7eYAfudQTiFuCkE3D295C23HdX/5f+jQHz2CrdaQG6lyb7lQy86wTeByHGgE8LVIGt0n0nZOAnnR3oBSzV/1ZfF8l6xgR8MSr0cqIv8F9sO7/X/3cRhrudA84XDeJ17bo6yo3FGvQL53BqV/V3DeG1/UmdQdcG6H+tOeUupQdowu0O0btdRqyyK4IvZefBAN1l0n0lr8IiKdj3vwjT9OwjiuGtBMp+Qu72ZgZbeEL97dI8E92AI1Jw64H5Nfqy9EBGHWIpOu2Dz0ifgH9EnXfFnq/T8xkFF9Ik+n/KibUmXQttdGqclgTd7rqsOJ3nsmJVCgXZpue1KHSioL0nQTZPsiMpbnZI8puyBtmT4FaG7/T8DoojisHXUuQbJX8jQfaNZHdm0Yiz2tr4x/y9MmC1RVFMjKX2OCZUOW+25vGMXupktUMc0YWa0fmi6C1fP5ZS+fXQWCaP42PJLJarssyKGG6aX4ee6nFENcaYKgs5WmUhk7JI4nG9LdudpKwVxD4TsFz27Po0zbV2JciiUvu+rAG2qOPTsefzCxC+JDwqe/aG4/hMstcTZAclG5Y1wGPquF/EMcK9Tu0cyrVc9Je9w7HaxjJVRYTVYinpy29abF2WuXZI4SfgIbFNt3a29FkL/OGcJ8a9NjsH4sOxvj2dncpdk9yg1FcpYTsMDPR5W+Y+xjLtIOyo+12fZhnsk6xbx4s+9t5wbg5fHAAAAABJRU5ErkJggg==">
                </div>
            </div>
            <div class="p-6">
                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                    {{ $patients }}
                </h3>
                <h5 class="mb-2 text-lg font-medium">Patients</h5>
            </div>
        </div>
    </div>

    <div class="mb-16 lg:mb-0">
        <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                    <img width="40"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACQUlEQVR4nO2ZPWsVQRSGnyQkYGKjjVct0mghmkL/gKJ2V8GIptAfYETt/MBCGy0k+QH6A0wKsdJSEmJjp0WSQjEB7bRRzA1Go3DlwLswLLl7x+TKnrnuAwPLnHeW9+zM2Y9ZqPh/OAXMAKtAQ8d1EuM+0GzR7pHQTDSBH8B1YLfaDfU1U5mZWZm1JPLcVMyWmXsaMlvbIFZTbIUEWJFZW0559ir2jQSYkVmriTy3Ulpa9aDYrSb2qFkSP1MqdnSLTf72m1HXEmqk/EDsCgaAMWAaeKtXlFUdTylmGtecBZYL6iNrS8AoDukFJgKj88AV4FDQZ8dXFcv6HmisGyZkbA24DPQUaHuV5FqQjJvl1JSx4xvEs6uf50SQzBlKZiCoifEWmlaJoJmx2HugnxIZC2qiZxOJ2DJbVPwcJTItE1bEbCIR45rijymRdzJxYAuJHFTcnjOlf3sMbSGR7YrbuUqjnclOav4pVSI5qhnpFJ26kknMSAxVIp2i62bkdosNuXbUNLb0RJYDE+vAU2AkYtyItOvBeDtXadjb60ngSWDqTsS4u9L+Bl4A54E+nJDtIk5GaCeltTHuGJe5hxHaR9JewiEXZc62fGK/Yy7gkNMy9yxC+1xa+ynkjmMyNxehfSntURxyROZeR2jfSHsYh+wPdkTasSTtPhxSk7lPEdrP0u7CIYMy9z1Cm23MbcMpv2SwaLOtXxrTuuWrTO4o0OyU5guO+SiTwwWaYWk+4JjFiH8jWVvAMa/+IhHTVnQtfwDXPfwfKZTEwgAAAABJRU5ErkJggg==">
                </div>
            </div>
            <div class="p-6">
                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                    {{ $employees }}
                </h3>
                <h5 class="mb-2 text-lg font-medium">Employees</h5>
            </div>
        </div>
    </div>

    <div class="mb-16 lg:mb-0">
        <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                    <img width="40"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC00lEQVR4nO2ZTYhNURzAfzN6D817iGThY0M0JbIXKxvCiCkLayF2SGgyyUwjewtl4WMyPtYWFpLZ2SkfY4ZBmhDJGOPrPU8n/1f/Tvde95577h1yf3Xqdef8v87n//wHCgoKXCgBnUA/8BiYACaBUWAA2AlMD5CbCXQDI0ANaMRsNZE5ITpSsQ0YjmH0BdBhOT+YwOlGSDM6Zrg43gr0JTRWBxaJfLcH5xvSulwCsJ1/DRwFVgNtMsIrgZPAB+nzGZgv8iNK9pAsw7iYvoeV/BMclo12/gpQieg/C9glATXRa76c1AF+y+g9kUhw2HK+xcEBPQCuNFx0dFrLppKncR86+pWQWfP8awEMKaFVeRv3oeOTEqrkbdzi/wxg6C9ZQmXXY/SyEjzG1ARQBo64XmT2MVrFXwBzgfPAONCrvvcAX3ylEiXrIhvwdJFtBsbUNxMEolvvO7vddUnmOiwlVx1mQstfCHCsR/U9Zc1ATQaxyzUTRaZYG3wDHAfWyOlUld/m23VgrSUflv+PAVvIgdaAIKLaQ0v+XkCfi7IPcmWrnAJ/CsAsM007cF/+NprXqEdt7B3AJeCRbDqzCR/It+0R+f4cx0OgoKAgBkF1mwl5hDc5B3xPcJxmXueJU7d5Ln2qKR33WuexCavbmBk46HkGUiVnYaSp2yQldZ0niLR1m9weKGHUlcIsR7/JNGXvqw+Fb5XC5WTPYmXPJHqpuaUU7iN79ih75lWWmr1K4UtgNtlhErpXyp6XzLTNUjqYsowShhmYO9YJVPKlfKO1mc3Rus6XcmC9VaapAxvwzH7gp3XRmP2xyXGkSjIwNy295vcBMnx16VOp2T4CN+RmNk6tAOZF3Bu7gXcBesblQZQpC+TN+iNmOmCWxjJLx6TVpy6FsoXkyBLgNPAsRhA6ZzJcU//wOwMsZYpplz1yFrgNPAXeA99CZqBFZrJ4AxcUkA2/AIMG2zbbhzXnAAAAAElFTkSuQmCC">
                </div>
            </div>
            <div class="p-6">
                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                    {{ $consultations }}
                </h3>
                <h5 class="mb-2 text-lg font-medium">Consultations</h5>
            </div>
        </div>
    </div>

    <div class="mb-16 lg:mb-0">
        <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                    <img width="40" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABO0lEQVR4nO2YS2rDMBBA36qrfg6Sm+RC/Vwm7lViUmh33fYS9bKliykBCWZhx0qsWCMxDwTGmth6zExkGxzHPD0gC8cbjYgIFTC3UBdZm6Yz8gC8AoOaH4AuzFUj0p1o+o6KRGImNurcRmWmGpGpvhDL/eIi1mg6I8OJZv+mkb/fHZVtiN3IhrgD7jGK6bqf4pD4yH589DeNtPL+IQmLrE6knyin6kX2IzFmkdKlJZkaUv/uoMpJH1cn0qty0seriERyiCyJMSNSbB+RTCKpH+timZkVGWPJteTcbLrIShmJXJyRT+Bvpt5/gQ9gm3jtIiJy5thaFXkEbmZudpx/CvHvI/N6Mywmcpt4w7sQ/3PZeq8v8pyYkZcQ/0VepFSPXGtEXKQ0kisjpREXCXhGrJSWVDImaUbEccjDP+SrIVveErBnAAAAAElFTkSuQmCC">
                </div>
            </div>
            <div class="p-6">
                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                    {{ $operations }}
                </h3>
                <h5 class="mb-2 text-lg font-medium">Operations</h5>
            </div>
        </div>
    </div>

    <div class="">
        <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                    <img width="40"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABO0lEQVR4nO2YS2rDMBBA36qrfg6Sm+RC/Vwm7lViUmh33fYS9bKliykBCWZhx0qsWCMxDwTGmth6zExkGxzHPD0gC8cbjYgIFTC3UBdZm6Yz8gC8AoOaH4AuzFUj0p1o+o6KRGImNurcRmWmGpGpvhDL/eIi1mg6I8OJZv+mkb/fHZVtiN3IhrgD7jGK6bqf4pD4yH589DeNtPL+IQmLrE6knyin6kX2IzFmkdKlJZkaUv/uoMpJH1cn0qty0seriERyiCyJMSNSbB+RTCKpH+timZkVGWPJteTcbLrIShmJXJyRT+Bvpt5/gQ9gm3jtIiJy5thaFXkEbmZudpx/CvHvI/N6Mywmcpt4w7sQ/3PZeq8v8pyYkZcQ/0VepFSPXGtEXKQ0kisjpREXCXhGrJSWVDImaUbEccjDP+SrIVveErBnAAAAAElFTkSuQmCC">
                </div>
            </div>
            <div class="p-6">
                <center><canvas id="percentageRoleChart"></canvas></center>
            </div>
        </div>
    </div>

    <div class="">
        <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                    <img width="40"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABO0lEQVR4nO2YS2rDMBBA36qrfg6Sm+RC/Vwm7lViUmh33fYS9bKliykBCWZhx0qsWCMxDwTGmth6zExkGxzHPD0gC8cbjYgIFTC3UBdZm6Yz8gC8AoOaH4AuzFUj0p1o+o6KRGImNurcRmWmGpGpvhDL/eIi1mg6I8OJZv+mkb/fHZVtiN3IhrgD7jGK6bqf4pD4yH589DeNtPL+IQmLrE6knyin6kX2IzFmkdKlJZkaUv/uoMpJH1cn0qty0seriERyiCyJMSNSbB+RTCKpH+timZkVGWPJteTcbLrIShmJXJyRT+Bvpt5/gQ9gm3jtIiJy5thaFXkEbmZudpx/CvHvI/N6Mywmcpt4w7sQ/3PZeq8v8pyYkZcQ/0VepFSPXGtEXKQ0kisjpREXCXhGrJSWVDImaUbEccjDP+SrIVveErBnAAAAAElFTkSuQmCC">
                </div>
            </div>
            <div class="p-6">
                <center><canvas id="patientRegistrationChart"></canvas></center>
            </div>
        </div>
    </div>

    <div class="">
        <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                    <img width="40"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABO0lEQVR4nO2YS2rDMBBA36qrfg6Sm+RC/Vwm7lViUmh33fYS9bKliykBCWZhx0qsWCMxDwTGmth6zExkGxzHPD0gC8cbjYgIFTC3UBdZm6Yz8gC8AoOaH4AuzFUj0p1o+o6KRGImNurcRmWmGpGpvhDL/eIi1mg6I8OJZv+mkb/fHZVtiN3IhrgD7jGK6bqf4pD4yH589DeNtPL+IQmLrE6knyin6kX2IzFmkdKlJZkaUv/uoMpJH1cn0qty0seriERyiCyJMSNSbB+RTCKpH+timZkVGWPJteTcbLrIShmJXJyRT+Bvpt5/gQ9gm3jtIiJy5thaFXkEbmZudpx/CvHvI/N6Mywmcpt4w7sQ/3PZeq8v8pyYkZcQ/0VepFSPXGtEXKQ0kisjpREXCXhGrJSWVDImaUbEccjDP+SrIVveErBnAAAAAElFTkSuQmCC">
                </div>
            </div>
            <div class="p-6">
                <center><canvas id="consultationChart"></canvas></center>
            </div>
        </div>
    </div>

    <div class="">
        <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                    <img width="40"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABO0lEQVR4nO2YS2rDMBBA36qrfg6Sm+RC/Vwm7lViUmh33fYS9bKliykBCWZhx0qsWCMxDwTGmth6zExkGxzHPD0gC8cbjYgIFTC3UBdZm6Yz8gC8AoOaH4AuzFUj0p1o+o6KRGImNurcRmWmGpGpvhDL/eIi1mg6I8OJZv+mkb/fHZVtiN3IhrgD7jGK6bqf4pD4yH589DeNtPL+IQmLrE6knyin6kX2IzFmkdKlJZkaUv/uoMpJH1cn0qty0seriERyiCyJMSNSbB+RTCKpH+timZkVGWPJteTcbLrIShmJXJyRT+Bvpt5/gQ9gm3jtIiJy5thaFXkEbmZudpx/CvHvI/N6Mywmcpt4w7sQ/3PZeq8v8pyYkZcQ/0VepFSPXGtEXKQ0kisjpREXCXhGrJSWVDImaUbEccjDP+SrIVveErBnAAAAAElFTkSuQmCC">
                </div>
            </div>
            <div class="p-6">
                <center><canvas id="operationsChart"></canvas></center>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const plugin = {
                id: 'emptyDoughnut',
                afterDraw(chart, args, options) {
                    const {datasets} = chart.data;
                    const {color, width, radiusDecrease} = options;
                    let hasData = false;
                
                    for (let i = 0; i < datasets.length; i += 1) {
                        const dataset = datasets[i];
                        hasData |= dataset.data.length > 0;
                    }
                
                    if (!hasData) {
                        const {chartArea: {left, top, right, bottom}, ctx} = chart;
                        const centerX = (left + right) / 2;
                        const centerY = (top + bottom) / 2;
                        const r = Math.min(right - left, bottom - top) / 2;
                
                        ctx.beginPath();
                        ctx.lineWidth = width || 2;
                        ctx.strokeStyle = color || 'rgba(255, 128, 0, 0.5)';
                        ctx.arc(centerX, centerY, (r - radiusDecrease || 0), 0, 2 * Math.PI);
                        ctx.stroke();
                    }
                }
            };

            const ctxRolePercentage = document.getElementById('percentageRoleChart');
            
            new Chart(ctxRolePercentage, {
            type: 'doughnut',
            data: {
                labels: @json($rolesLabelsPercentage),
                datasets: [{
                    label: '# of Affectation to The Role',
                    data: @json($rolesPercentageNumbers),
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                },
                plugins: {
                    emptyDoughnut: {
                        color: 'rgba(255, 128, 0, 0.5)',
                        width: 2,
                        radiusDecrease: 20
                    },
                    title: {
                        display: true,
                        text: 'Percentage Of each Employe Role',
                    }
                }
            },
            plugins: [plugin]
            });
        </script>
        
    <script>
        const ctxPatientRegistration = document.getElementById('patientRegistrationChart');
    
        new Chart(ctxPatientRegistration, {
            type: 'bar',
            data: {
                labels: @json($patientsLabelsPercentage),
                datasets: [{
                    label: ' Patients',
                    data: @json($patientsPercentageNumbers),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        document.getElementById('patientRegistrationChart').style.width = "270px";
        document.getElementById('patientRegistrationChart').style.height = "240px";
    </script>
  
    <script>
        const ctxConsultations = document.getElementById('consultationChart');
    
        new Chart(ctxConsultations, {
            type: 'bar',
            data: {
                labels: @json($consultationsLabelsPercentage),
                datasets: [{
                    label: ' Consultations',
                    data: @json($consultationsPercentageNumbers),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        document.getElementById('consultationChart').style.width = "270px";
        document.getElementById('consultationChart').style.height = "240px";
    </script>
  
    <script>
        const ctxOperations = document.getElementById('operationsChart');
    
        new Chart(ctxOperations, {
            type: 'bar',
            data: {
                labels: @json($operationsLabelsPercentage),
                datasets: [{
                    label: ' Operations',
                    data: @json($operationsPercentageNumbers),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        document.getElementById('operationsChart').style.width = "270px";
        document.getElementById('operationsChart').style.height = "240px";
    </script>
    @endpush
</div>
