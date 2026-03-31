<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

    <form action="#" method="post">
        @csrf
        <label for="">Date Time?</label>
        <input type="datetime-local" name="date" value="{{ now()->toDateTimeLocalString() }}" id="">
        <span>{{ now()->toDateTimeLocalString() }}</span>
        <button>submit</button>
    </form>

</div>
