<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>

<div class="container">
    <h3>Review ddan submit order</h3>
    <hr />
    <table>
        <tr>
            <td>Pagi&senja</td>
            <td>@1</td>
            <td>Rp. 70000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <hr />
    <span>Rp. 70000</span>
    <h3 class="mt-3">alamat pengiriman</h3>
    <p>JL. simpang sungai duren, mr. jambi</p>
    <h3 class="mt-3">metode bayar</h3>
    <hr />
    <p>Transfer bank</p>
    <p>No Rekening: Julia, BCA, 12345678</p>
    <div class="mt-5">
        <form action="<?= base_url('submit')?>"method="POST">
            <button type="submit" class="btn btn-succes">Sub,it Order</button>
        </form>
        <a href="<?= base_url('submit') ?>" class="btn btn-success">Submit order</a>
    </div>
</div>

<?= $this->endSection() ?>