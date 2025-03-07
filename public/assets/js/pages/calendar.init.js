document.addEventListener("DOMContentLoaded", function () {
    var l = new bootstrap.Modal(document.getElementById("event-modal"), {
        keyboard: !1,
    });
    document.getElementById("event-modal");
    var t = document.getElementById("modal-title"),
        n = document.getElementById("form-event"),
        d = null,
        i = null,
        r = document.getElementsByClassName("needs-validation"),
        d = null,
        i = null,
        e = new Date(),
        a = e.getDate(),
        s = e.getMonth(),
        o = e.getFullYear();
    new FullCalendar.Draggable(document.getElementById("external-events"), {
        itemSelector: ".external-event",
        eventData: function (e) {
            return {
                title: e.innerText,
                start: new Date(),
                className: e.getAttribute("data-class"),
            };
        },
    });
    var c = [
            {
                title: "All Day Event",
                start: new Date(o, s, 1),
                className: "bg-primary",
            },
            {
                title: "Long Event",
                start: new Date(o, s, a - 5),
                end: new Date(o, s, a - 2),
                className: "bg-warning",
            },
            {
                id: 999,
                title: "Repeating Event",
                start: new Date(o, s, a - 3, 16, 0),
                allDay: !1,
                className: "bg-info",
            },
            {
                id: 999,
                title: "Repeating Event",
                start: new Date(o, s, a + 4, 16, 0),
                allDay: !1,
                className: "bg-primary",
            },
            {
                title: "Meeting",
                start: new Date(o, s, a, 10, 30),
                allDay: !1,
                className: "bg-success",
            },
            {
                title: "Lunch",
                start: new Date(o, s, a, 12, 0),
                end: new Date(o, s, a, 14, 0),
                allDay: !1,
                className: "bg-danger",
            },
            {
                title: "Birthday Party",
                start: new Date(o, s, a + 1, 19, 0),
                end: new Date(o, s, a + 1, 22, 30),
                allDay: !1,
                className: "bg-success",
            },
            {
                title: "Click for Google",
                start: new Date(o, s, 28),
                end: new Date(o, s, 29),
                url: "http://google.com/",
                className: "bg-dark",
            },
        ],
        m =
            (document.getElementById("external-events"),
            document.getElementById("calendar"));
    function u(e) {
        l.show(),
            n.classList.remove("was-validated"),
            n.reset(),
            (d = null),
            (t.innerText = "Add Event"),
            (i = e);
    }
    function v() {
        return 768 <= window.innerWidth && window.innerWidth < 1200
            ? "timeGridWeek"
            : window.innerWidth <= 768
            ? "listMonth"
            : "dayGridMonth";
    }
    var g = new FullCalendar.Calendar(m, {
        timeZone: "local",
        editable: !0,
        droppable: !0,
        selectable: !0,
        initialView: v(),
        themeSystem: "bootstrap",
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
        },
        windowResize: function (e) {
            var t = v();
            g.changeView(t);
        },
        eventDidMount: function (e) {
            var t;
            "done" === e.event.extendedProps.status &&
                ((e.el.style.backgroundColor = "red"),
                (t = e.el.getElementsByClassName("fc-event-dot")[0]) &&
                    (t.style.backgroundColor = "white"));
        },
        eventClick: function (e) {
            l.show(),
                n.reset(),
                (document.getElementById("event-title").value[0] = ""),
                (d = e.event),
                (document.getElementById("event-title").value = d.title),
                (document.getElementById("event-category").value =
                    d.classNames[0]),
                (i = null),
                (t.innerText = "Edit Event"),
                (i = null);
        },
        dateClick: function (e) {
            u(e);
        },
        events: c,
    });
    g.render(),
        n.addEventListener("submit", function (e) {
            e.preventDefault();
            var t,
                n = document.getElementById("event-title").value,
                a = document.getElementById("event-category").value;
            !1 === r[0].checkValidity()
                ? r[0].classList.add("was-validated")
                : (d
                      ? (d.setProp("title", n), d.setProp("classNames", [a]))
                      : ((t = {
                            title: n,
                            start: i.date,
                            allDay: i.allDay,
                            className: a,
                        }),
                        g.addEvent(t)),
                  l.hide());
        }),
        document
            .getElementById("btn-delete-event")
            .addEventListener("click", function (e) {
                d && (d.remove(), (d = null).hide());
            }),
        document
            .getElementById("btn-new-event")
            .addEventListener("click", function (e) {
                u({ date: new Date(), allDay: !0 });
            });
});
