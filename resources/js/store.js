import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        availableTutorials: [
            {
                ratingInfo: {
                    rating: 4.7,
                    votes: 124
                },
                title: 'HTML 5',
                description: "HTML is the very first technology, that everyone who wants to learn web development should" +
                    " know. This tutorial is made for beginners who want to start learning web development from the " +
                    "scratch!",
                info: {
                    sections: 4,
                    lessons: 18,
                    quiz: 3,
                    type: 'text'

                },
                styles: {
                    headerBackground: "linear-gradient(to top, #b73e3e, #b23b3b, #ae3837, #a93434, #a53131)",
                    iconClass: "fa-10x fab fa-html5",
                    iconColor: "#e02e00",
                }
            },
            {
                ratingInfo: {
                    rating: 4.3,
                    votes: 47
                },
                title: 'CSS 3',
                description: "CSS is the second of the two core technologies for building web pages and describes how html " +
                    "elements should be displayed on screens. This tutorial is well suited for those who are just finished " +
                    "learn html and is about to start learning css!",
                info: {
                    sections: 3,
                    lessons: 24,
                    quiz: 7,
                    type: 'text'
                },
                styles: {
                    headerBackground: "linear-gradient(to right top, #006eba, #0078c2, #0083ca, #008dd2, #0098d9)",
                    iconClass:"fa-10x fab fa-css3-alt",
                    iconColor: "#006eba",
                }
            },
            {
                ratingInfo: {
                    rating: 4.9,
                    votes: 247
                },
                title: 'JavaScript',
                description: "JavaScript is one of the most popular today's programming language which is widely used in " +
                    "web development. This tutorial is made for beginners who has no experience in programming but want to start " +
                    "learn JavaScript.",
                info: {
                    sections: 6,
                    lessons: 29,
                    quiz: 5,
                    type: 'text'
                },
                styles: {
                    headerBackground: "linear-gradient(to right top, #f0c837, #f4cc2f, #f8d026, #fbd419, #ffd800)",
                    iconClass: "fa-7x fab fa-js",
                    iconColor: "#f1d63b",
                }
            },
            {
                ratingInfo: {
                    rating: 4.3,
                    votes: 87
                },
                title: 'PHP',
                description: "PHP is a general-purpose programming language which was designed and widely used in " +
                    "'server-side' web development. This tutorial will introduce you with PHP and teach how to build web pages dynamically!",
                info: {
                    sections: 8,
                    lessons: 65,
                    quiz: 9,
                    type: 'text'
                },
                styles: {
                    headerBackground: "linear-gradient(to bottom, #777bb7, #7276b5, #6d71b2, #676cb0, #6267ad)",
                    iconClass: "fa-7x fab fa-php",
                    iconColor: "#777bb3",
                }
            }
        ]
    },
    getters: {
        availableTutorials(state){
            return state.availableTutorials;
        }
    },
    mutations: {

    },
    actions: {

    }
});