$(function () {
  // definovanie funkcie (callbacku) pre aktualizáciu času
  const datum = () => {
    const datetime = new Date();
    const datum = {
      day: "numeric",
      month: "long",
      year: "numeric",
    };
    const cas = {
      hour: "numeric",
      minute: "numeric",
      second: "numeric",
    };
    $("#datetime").text(
      `${datetime.toLocaleString("sk-SK", {
        weekday: "long",
      })}, ${datetime.toLocaleString("sk-SK", datum)} ${datetime.toLocaleString(
        "sk-SK",
        cas
      )}`
    );
  };

  // aktualizovať čas pri načítaní stránky:
  datum();
  // každú sekundu zavolať callback na aktualizáciu času
  setInterval(datum, 1000);

  // funkcia pre zobrazovanie hodnoty posuvníka
  $("#rozsah").on("input", function () {
    console.log($(this));
    const hodnota = $(this).val();
    $("#rozsah-hodnota").text(hodnota);
  });
});
