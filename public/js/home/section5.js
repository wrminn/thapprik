function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var d = new Date();
        d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + d.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// ตรวจว่าโหวตแล้วหรือยัง
$(document).ready(function() {
    if (getCookie("voted") === "true") {
        $("#voteForm :input").prop("disabled", true);
        $("#voteForm button").prop("disabled", true).text("โหวตแล้ว");
    }

    $("#voteForm").on("submit", function(e) {
        e.preventDefault();

        let voteValue = $("input[name='vote']:checked").val();
        if (!voteValue) {
            alert("กรุณาเลือกคะแนนก่อนโหวต");
            return;
        }

        $.ajax({
            url: "/vote/save", // endpoint หลังบ้าน
            method: "POST",
            data: {
                _token: $('input[name="_token"]').val(),
                vote: voteValue
            },
            success: function(res) {
                alert("โหวตสำเร็จ ขอบคุณครับ");
                setCookie("voted", "true", 7);
                $("#voteForm :input").prop("disabled", true);
                $("#voteForm button").prop("disabled", true).text("โหวตแล้ว");
            },
            error: function() {
                alert("เกิดข้อผิดพลาด กรุณาลองใหม่");
            }
        });
    });
});
