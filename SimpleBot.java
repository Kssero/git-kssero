package simple;

import  java.util.*;
import java.util.Date;
import java.util.Random;
import java.util.regex.Pattern;

    class SimpleBot {
   Pattern pattern;
   Date date;
   Random random;

   final String[] COMMON_PHRASES = {"Нет ничего ценнее слов, сказанных к месту и ко времени.",
           "Порой молчание может сказать больше, нежели уйма слов",
           "перед тем как писать или говорить всегда лучше подумать.",
           "Вежливая и грамотная речь говорит о величии души",
           "Приятно когда текст без орфографических ошибок.",
           "Многословие есть признак неупорядоченного ума.",
           "Слова могут ранить, но могут и исцелять.",
           "Записывая слова, мы удваиваем их силу.",
           "Кто ясно мыслит, тот ясно излагает.",
           "Боюсь вы что-то недоговариваете."};
   final String[] ELUSIVE_ANSWERS = {"Вопрос непростой прошу тайм-аут на раздумье.",
           "Не уверен, что располагаю такой информацией",
           "Может лучше поговорим о чем то другом?",
           "Простите но это слишком личный вопрос.",
           "Не уверен что вам понравится ответ.",
           "Поверьте, я сам хотел бы это знать.",
           "Вы действительно хотите это знать?",
           "Уверен вы уже догадались сами.",
           "Зачем вам такая информация?",
           "Давайте сохраним интригу?"};
       final Map<String,String> PATTERNS_OF_ANALISIS = new HashMap<String,String>()
       {{
           // hello
           put("Хай","hello");
           put("привет","hello");
           put("здорова","hello");
           put("здравствуй","hello");
           // who
           put("кто\\s.*ты","who");
           put("ты \\s.*кто","who");
           // name
           put("как\\s.*зовут","name");
           put("как\\s.*имя","name");
           put("есть\\s.*имя","name");
           put("какое\\s.*имя","name");
           // whatdoyoudoing
           put("зачем\\s.*тут","what");
           put("зачем\\s.*здесь","what");
           put("что\\s.*делаешь","what");
           put("чем\\s.*занимаешься","what");
           // whatdoyoulike
           put("что\\s.*нравится","whatdoyoulike");
           put("что\\s.*любовь","whatdoyoulike");
           // iamfeelling
           put("кажется","iamfeelling");
           put("чувствую","iamfeelling");
           put("испытываю","iamfeelling");
           // yes
           put("да","yes");
           put("согласен","yes");
           // whattime
           put("который\\s.*час","whattime");
           put("сколько\\s.*время","whattime");
           // bye
           put("прощай","bye");
           put("увидимся","bye");


       }};

       final Map<String,String> ANSWERS_BY_PATTERNS = new HashMap<String,String>()
       {{
           put("hello","Здравствуйте, рад вас видеть.");
           put("who","Я обычный, чат-бот.");
           put("name","Зовите меня Чаттер.");
           put("what","Я пробую общаться с людьми.");
           put("whatdoyoulike","Мне нравится думать что я не просто программа.");
           put("iamfeelling","Как давно это началось? Расскажите чуть подробнее.");
           put("yes","Согласие есть продукт при полном непротивлении сторон.");
           put("bye","До свидания. Надеюсь еще увидимся.");


       }};


 SimpleBot(){
    random = new Random();
    date = new Date();
}
     String sayInReturn(String msg,boolean ai){
            String say = (msg.trim().endsWith("?"))?
                    ELUSIVE_ANSWERS[random.nextInt(ELUSIVE_ANSWERS.length)]:
                    COMMON_PHRASES[random.nextInt(COMMON_PHRASES.length)];
            if(ai){
                String message = String.join(" ",msg.toLowerCase().split("[ {,|.}?]+"));
                for(Map.Entry<String,String> o: PATTERNS_OF_ANALISIS.entrySet()){
                    pattern = Pattern.compile(o.getKey());
                    if(pattern.matcher(message).find())
                        if(o.getValue().equals("whattime")) return date.toString();
                        else return ANSWERS_BY_PATTERNS.get(o.getValue());
                }
            }
            return  say;
    }
}
