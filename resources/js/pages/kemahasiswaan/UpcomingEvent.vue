<template>
  <div>
    <h1>Upcoming Event</h1>
    <section class="timeline">
      <div class="container">
        <div
          class="timeline-item"
          v-for="event in timelineItems"
          :key="event.id"
        >
          <div class="timeline-img">
          </div>
          <div
            :class="{

              'timeline-content js--fadeInRight timeline-card': event.id % 2 === 0 && event.image,
              'timeline-content js--fadeInLeft  timeline-card': event.id % 2 !== 0 && event.image,
               'timeline-content js--fadeInRight': event.id % 2 === 0 && !event.image,
              'timeline-content js--fadeInLeft ': event.id % 2 !== 0 && !event.image,
            }"
          >
            <div v-if="event.image" class="timeline-img-header" :style="{background:
            'linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4))', backgroundImage: `url(${event.image})`, backgroundSize: 'cover'}">
              <div style="padding-right: 20px">
                  <h2 style="padding: 10px 25px 10px 10px;background: linear-gradient(to left, rgba(255, 255, 255, 0), rgba(0, 0, 0, 0.8));">{{ event.title }}</h2>
              </div>
            </div>
            <div v-else>
              <h2>{{ event.title }}</h2>
            </div>
            <h2>Title</h2>
            <div class="date">{{ event.date }}</div>
            <p>
              {{ event.shortDesc }}
            </p>
            <a v-if="event.url" class="bnt-more" :href="event.url">Detail</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  computed: {
    timelineItems() {
      return [
        {
          id: 1,
          title: "Event 1",
          shortDesc: "Ini event 1",
          detail: "Loooong desc",
          url: "",
          image: "/img/header.jpg",
          date: "10 Juni 2021, 08:30 - 12:00",
        },
        {
          id: 2,
          title: "Event 2",
          shortDesc: "Ini event 2",
          detail: "Loooong desc 2",
          url: "",
          image: "",
          date: "11 Juni 2021, 08:00 - 12:00",
        },
        {
          id: 3,
          title: "Event 3",
          shortDesc: "Ini event 3",
          detail: "Loooong desc 3",
          url: "",
          image: "/img/header-v2.jpg",
          date: "19 Juni 2021, 09:00 - 12:00",
        },
      ];
    },
  },
  mounted() {
    $(function () {
      window.sr = ScrollReveal();

      if ($(window).width() < 768) {
        if ($(".timeline-content").hasClass("js--fadeInLeft")) {
          $(".timeline-content")
            .removeClass("js--fadeInLeft")
            .addClass("js--fadeInRight");
        }

        sr.reveal(".js--fadeInRight", {
          origin: "right",
          distance: "300px",
          easing: "ease-in-out",
          duration: 800,
        });
      } else {
        sr.reveal(".js--fadeInLeft", {
          origin: "left",
          distance: "300px",
          easing: "ease-in-out",
          duration: 800,
        });

        sr.reveal(".js--fadeInRight", {
          origin: "right",
          distance: "300px",
          easing: "ease-in-out",
          duration: 800,
        });
      }

      sr.reveal(".js--fadeInLeft", {
        origin: "left",
        distance: "300px",
        easing: "ease-in-out",
        duration: 800,
      });

      sr.reveal(".js--fadeInRight", {
        origin: "right",
        distance: "300px",
        easing: "ease-in-out",
        duration: 800,
      });
    });
  },
};
</script>
<style lang="scss" scoped>
$primary: #3F51B5;
$dark-primary: #303F9F;
$light-primary: #C5CAE9;
$text: #FFFFFF;
$primary-text: #212121;
$secondary-text: #757575;
$accent: #FF4081;

section {
  padding: 100px 0;
}

html, body {
  overflow-x: hidden;
}

body {
  font-family: 'Roboto';
  font-size: 17px;
  font-weight: 400;
  background-color: #eee;
}

h1 {
  font-size: 200%;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-weight: 400;
}

header {
	background: $primary;
	color: $text;
	padding: 150px 0;

	p {
		font-family: 'Allura';
		color: rgba(255, 255, 255, .2);
		margin-bottom: 0;
		font-size: 60px;
		margin-top: -30px;

	}
}

.timeline {

	position: relative;

	&::before {
		content: '';
		background: $light-primary;
		width: 5px;
		height: 95%;
		position: absolute;
		left: 50%;
		transform: translateX(-50%);
	}
}

.timeline-item {
	width: 100%;
	margin-bottom: 70px;

	&:nth-child(even) {

		.timeline-content {
			float: right;
			padding: 40px 30px 10px 30px;

			.date {
				right: auto;
				left: 0;
			}

			&::after {
				content: '';
				position: absolute;
				border-style: solid;
				width: 0;
				height: 0;
				top: 30px;
				left: -15px;
				border-width: 10px 15px 10px 0;
				border-color: transparent #f5f5f5 transparent transparent;
			}
		}
	}

	&::after {
		content: '';
		display: block;
		clear: both;
	}
}


.timeline-content {
	position: relative;
	width: 45%;
	padding: 10px 30px;
	border-radius: 4px;
	background: #f5f5f5;
	box-shadow: 0 20px 25px -15px rgba(0, 0, 0, .3);

	&::after {
		content: '';
		position: absolute;
		border-style: solid;
		width: 0;
		height: 0;
		top: 30px;
		right: -15px;
		border-width: 10px 0 10px 15px;
		border-color: transparent transparent transparent #f5f5f5;
	}
}

.timeline-img {
	width: 30px;
	height: 30px;
	background: $primary;
	border-radius: 50%;
	position: absolute;
	left: 50%;
	margin-top: 25px;
	margin-left: -15px;
}

a {
	background: $primary;
	color: $text;
	padding: 8px 20px;
	text-transform: uppercase;
	font-size: 14px;
	margin-bottom: 20px;
	margin-top: 10px;
	display: inline-block;
	border-radius: 2px;
	box-shadow: 0 1px 3px -1px rgba(0, 0, 0, .6);

	&:hover, &:active, &:focus {
		background: darken($primary, 10%);
		color: $text;
		text-decoration: none;
	}

}

.timeline-card {
	padding: 0!important;

	p {
		padding: 0 20px;
	}

	a {
		margin-left: 20px;
	}
}

.timeline-item {
  .timeline-img-header {
			// background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0, .4)), url('https://picsum.photos/1000/800/?random') center center no-repeat;
			// background-size: cover;
		}
}

.timeline-img-header {

	height: 200px;
	position: relative;
	margin-bottom: 20px;

	h2 {
		color: $text;
		position: absolute;
		bottom: 5px;
		left: 20px;
	}
}

blockquote {
	margin-top: 30px;
	color: $secondary-text;
	border-left-color: $primary;
	padding: 0 20px;
}

.date {
	background: $accent;
	display: inline-block;
	color: $text;
	padding: 10px;
	position: absolute;
	top: 0;
	right: 0;
}

@media screen and (max-width: 768px) {

	.timeline {

		&::before {
			left: 50px;
		}

		.timeline-img {
			left: 50px;
		}

		.timeline-content {
			max-width: 100%;
			width: auto;
			margin-left: 70px;
		}

		.timeline-item {

			&:nth-child(even) {

				.timeline-content {
					float: none;

				}
			}

			&:nth-child(odd) {

				.timeline-content {

					&::after {
						content: '';
						position: absolute;
						border-style: solid;
						width: 0;
						height: 0;
						top: 30px;
						left: -15px;
						border-width: 10px 15px 10px 0;
						border-color: transparent #f5f5f5 transparent transparent;
					}
				}

			}
		}
	}

}

</style>
