window.onload = () => {
    {
        const div = document.querySelector(".main .aboutMe");
        const text = "Hello, my name is Rostyslav, I'm full stack web developer";
        const cursor = document.querySelector(".main .blinking-cursor");

        function blinking() {
            cursor.style.display = cursor.style.display === 'none' ? '' : 'none';
            setTimeout(blinking, 500);
        }

        function typeText(index) {
            if (index < text.length) {
                div.textContent += text[index];
                index++;
                setTimeout(() => {
                    typeText(index);
                }, 70);

                return;
            }

            blinking();
        }

        typeText(0);
    }
}
